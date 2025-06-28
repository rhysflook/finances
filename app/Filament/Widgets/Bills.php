<?php

namespace App\Filament\Widgets;

use App\Models\Bill;
use App\Models\BillPayment;
use App\Models\Expense;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Bills extends StatsOverviewWidget
{
    use InteractsWithPageFilters;
    protected function getStats(): array
    {
        $startDate = $this->pageFilters['startDate'] ?? null;
        $endDate = $this->pageFilters['endDate'] ?? null;
        $label = 'Bills Total';
        if ($startDate && $endDate) {
            $label .= " from {$startDate} to {$endDate}";
        } elseif ($startDate) {
            $label .= " from {$startDate}";
        } elseif ($endDate) {
            $label .= " until {$endDate}";
        }

        $total = BillPayment::query()
            ->when($startDate, fn (Builder $query) => $query->whereDate('date', '>=', $startDate))
            ->when($endDate, fn (Builder $query) => $query->whereDate('date', '<=', $endDate))
            ->whereHas('bill.currency', fn ($query) => $query->where('code', 'JPY'))
            ->sum('amount');

        $breakdown = Bill::all()->map(function ($bill) use ($startDate, $endDate) {
            $is_not_fixed = !$bill->is_fixed_amount;
            $label_ext = $is_not_fixed ? ' (Average)' : '';
            return [
                'label' => $bill->bill . $label_ext,
                'value' => BillPayment::query()
                    ->where('bill_id', $bill->id)
                    ->when($startDate, fn (Builder $query) => $query->whereDate('date', '>=', $startDate))
                    ->when($endDate, fn (Builder $query) => $query->whereDate('date', '<=', $endDate))
                    ->whereHas('bill.currency', fn ($query) => $query->where('code', 'JPY'))
                    ->average('amount'),
            ];
        })->filter(fn ($item) => $item['value'] > 0);
        return [
            StatsOverviewWidget\Stat::make(
                label: $label,
                value: $total,
            ),

            ...array_map(fn ($item) => StatsOverviewWidget\Stat::make(
                label: $item['label'],
                value: round($item['value']),
            ), $breakdown->toArray()),
        ];
    }
}
