<?php

namespace App\Filament\Resources\CreditCardPayments\Pages;

use App\Filament\Resources\CreditCardPayments\CreditCardPaymentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCreditCardPayments extends ListRecords
{
    protected static string $resource = CreditCardPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
