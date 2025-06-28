<?php

namespace App\Filament\Resources\BillPayments\Pages;

use App\Filament\Resources\BillPayments\BillPaymentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBillPayment extends ViewRecord
{
    protected static string $resource = BillPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
