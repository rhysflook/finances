<?php

namespace App\Filament\Resources\BillPayments\Pages;

use App\Filament\Resources\BillPayments\BillPaymentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBillPayment extends EditRecord
{
    protected static string $resource = BillPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
