<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('reason');
            $table->bigInteger('amount')
                ->comment('The amount of income, stored as an integer to represent the smallest currency unit (e.g., cents for USD).');
            $table->string('category')
                ->comment('The category of the income, such as salary, bonus, or investment.');
            $table->date('date')
                ->comment('The date when the income was received.');
            $table->foreignIdFor(\App\Models\Currency::class)
                ->constrained()
                ->onDelete('cascade')
                ->comment('Foreign key to the currencies table, indicating the currency of the income amount.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
