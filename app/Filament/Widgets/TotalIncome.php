<?php

namespace App\Filament\Widgets;

use App\Models\Income;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalIncome extends StatsOverviewWidget
{
    use InteractsWithPageFilters;
    protected function getStats(): array
    {
        $startDate = $this->pageFilters['startDate'] ?? null;
        $endDate = $this->pageFilters['endDate'] ?? null;
        $label = 'Total Incoming Yen';
        if ($startDate && $endDate) {
            $label .= " from {$startDate} to {$endDate}";
        } elseif ($startDate) {
            $label .= " from {$startDate}";
        } elseif ($endDate) {
            $label .= " until {$endDate}";
        }

        return [
                StatsOverviewWidget\Stat::make(
                label: $label,
                value: Income::query()
                    ->when($startDate, fn (Builder $query) => $query->whereDate('date', '>=', $startDate))
                    ->when($endDate, fn (Builder $query) => $query->whereDate('date', '<=', $endDate))
                    ->whereHas('currency', fn ($query) => $query->where('code', 'JPY'))
                    ->sum('amount'),
            ),
        ];
    }
}
