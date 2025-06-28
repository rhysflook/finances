<?php

namespace App\Filament\Resources\BillPayments\Pages;

use App\Filament\Resources\BillPayments\BillPaymentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBillPayments extends ListRecords
{
    protected static string $resource = BillPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
