<?php

namespace App\Filament\Resources\BillPayments;

use App\Filament\Resources\BillPayments\Pages\CreateBillPayment;
use App\Filament\Resources\BillPayments\Pages\EditBillPayment;
use App\Filament\Resources\BillPayments\Pages\ListBillPayments;
use App\Filament\Resources\BillPayments\Pages\ViewBillPayment;
use App\Filament\Resources\BillPayments\Schemas\BillPaymentForm;
use App\Filament\Resources\BillPayments\Schemas\BillPaymentInfolist;
use App\Filament\Resources\BillPayments\Tables\BillPaymentsTable;
use App\Models\BillPayment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BillPaymentResource extends Resource
{
    protected static ?string $model = BillPayment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BillPaymentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BillPaymentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BillPaymentsTable::configure($table);
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
            'index' => ListBillPayments::route('/'),
            'create' => CreateBillPayment::route('/create'),
            'view' => ViewBillPayment::route('/{record}'),
            'edit' => EditBillPayment::route('/{record}/edit'),
        ];
    }
}
