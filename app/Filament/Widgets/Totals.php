<?php

namespace App\Filament\Widgets;

use App\Models\BillPayment;
use App\Models\CreditCardPayment;
use App\Models\Expense;
use App\Models\Income;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Totals extends StatsOverviewWidget
{
    use InteractsWithPageFilters;
    protected function getStats(): array
    {
        $startDate = $this->pageFilters['startDate'] ?? null;
        $endDate = $this->pageFilters['endDate'] ?? null;
        $label = 'Total Incoming Yen';
        $labelOut = 'Total Outgoing Yen';
        if ($startDate && $endDate) {
            $label .= " from {$startDate} to {$endDate}";
            $labelOut .= " from {$startDate} to {$endDate}";
        } elseif ($startDate) {
            $label .= " from {$startDate}";
            $labelOut .= " from {$startDate}";
        } elseif ($endDate) {
            $label .= " until {$endDate}";
            $labelOut .= " until {$endDate}";
        }

        $incoming = Income::query()
            ->when($startDate, fn (Builder $query) => $query->whereDate('date', '>=', $startDate))
            ->when($endDate, fn (Builder $query) => $query->whereDate('date', '<=', $endDate))
            ->whereHas('currency', fn ($query) => $query->where('code', 'JPY'))
            ->sum('amount');

        $outgoing = Expense::query()
            ->when($startDate, fn (Builder $query) => $query->whereDate('date', '>=', $startDate))
            ->when($endDate, fn (Builder $query) => $query->whereDate('date', '<=', $endDate))
            ->whereHas('currency', fn ($query) => $query->where('code', 'JPY'))
            ->sum('amount');

        $bills = BillPayment::query()
            ->when($startDate, fn (Builder $query) => $query->whereDate('date', '>=', $startDate))
            ->when($endDate, fn (Builder $query) => $query->whereDate('date', '<=', $endDate))
            ->whereHas('bill.currency', fn ($query) => $query->where('code', 'JPY'))
            ->sum('amount');

        $credit = CreditCardPayment::query()
            ->when($startDate, fn (Builder $query) => $query->whereDate('payment_date', '>=', $startDate))
            ->when($endDate, fn (Builder $query) => $query->whereDate('payment_date', '<=', $endDate))
            ->whereHas('creditCard.currency', fn ($query) => $query->where('code', 'JPY'))
            ->sum('amount');

        return [
            StatsOverviewWidget\Stat::make(
                label: $label,
                value: $incoming,
            ),
            StatsOverviewWidget\Stat::make(
                label: $labelOut,
                value: $outgoing,
            ),
            StatsOverviewWidget\Stat::make(
                label: 'Total Bills Paid',
                value: $bills,
            ),
            StatsOverviewWidget\Stat::make(
                label: 'Total Credit Card Payments',
                value: $credit,
            ),
            StatsOverviewWidget\Stat::make(
                label: 'Net Income',
                value: $incoming - ($outgoing + $bills + $credit),
            ),
        ];
    }
}
