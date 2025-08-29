<?php

namespace App\Filament\Resources\Expenses\Pages;

use App\Filament\Resources\Expenses\ExpenseResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateExpense extends CreateRecord
{
    protected static string $resource = ExpenseResource::class;

    protected function preserveFormDataWhenCreatingAnother(array $data): array
    {
        return $data;
    }

    protected function handleRecordCreation(array $data): Model
    {
        $model = static::getModel();
        $to_return = null;
        foreach ($data['items'] as $item) {
            $to_return = $model::create([
                ...$item,
                'vendor' => $data['vendor'],
                'description' => $data['description'],
                'currency_id' => $data['currency_id'],
                'date' => $data['date'],
            ]);
        }
        return $to_return;
    }
}
