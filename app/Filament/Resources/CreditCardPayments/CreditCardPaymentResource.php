<?php

namespace App\Filament\Resources\CreditCardPayments;

use App\Filament\Resources\CreditCardPayments\Pages\CreateCreditCardPayment;
use App\Filament\Resources\CreditCardPayments\Pages\EditCreditCardPayment;
use App\Filament\Resources\CreditCardPayments\Pages\ListCreditCardPayments;
use App\Filament\Resources\CreditCardPayments\Pages\ViewCreditCardPayment;
use App\Filament\Resources\CreditCardPayments\Schemas\CreditCardPaymentForm;
use App\Filament\Resources\CreditCardPayments\Schemas\CreditCardPaymentInfolist;
use App\Filament\Resources\CreditCardPayments\Tables\CreditCardPaymentsTable;
use App\Models\CreditCardPayment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CreditCardPaymentResource extends Resource
{
    protected static ?string $model = CreditCardPayment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Finance';
    public static function form(Schema $schema): Schema
    {
        return CreditCardPaymentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CreditCardPaymentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CreditCardPaymentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCreditCardPayments::route('/'),
            'create' => CreateCreditCardPayment::route('/create'),
            'view' => ViewCreditCardPayment::route('/{record}'),
            'edit' => EditCreditCardPayment::route('/{record}/edit'),
        ];
    }
}
