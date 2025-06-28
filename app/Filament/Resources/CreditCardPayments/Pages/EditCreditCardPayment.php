<?php

namespace App\Filament\Resources\CreditCardPayments\Pages;

use App\Filament\Resources\CreditCardPayments\CreditCardPaymentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCreditCardPayment extends EditRecord
{
    protected static string $resource = CreditCardPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
