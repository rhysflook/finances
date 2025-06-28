<?php

namespace App\Filament\Resources\CreditCardPayments\Pages;

use App\Filament\Resources\CreditCardPayments\CreditCardPaymentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCreditCardPayment extends CreateRecord
{
    protected static string $resource = CreditCardPaymentResource::class;
}
