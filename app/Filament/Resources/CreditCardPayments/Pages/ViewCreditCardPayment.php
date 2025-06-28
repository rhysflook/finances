<?php

namespace App\Filament\Resources\CreditCardPayments\Pages;

use App\Filament\Resources\CreditCardPayments\CreditCardPaymentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCreditCardPayment extends ViewRecord
{
    protected static string $resource = CreditCardPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
