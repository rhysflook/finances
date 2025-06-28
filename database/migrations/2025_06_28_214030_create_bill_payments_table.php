<?php

use App\Models\Bill;
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
        Schema::create('bill_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Bill::class);
            $table->bigInteger('amount')
                ->comment('The amount paid towards the bill, stored as an integer to represent the smallest currency unit (e.g., cents).');
            $table->date('date')
                ->comment('The date when the bill payment was made, stored in the format YYYY-MM-DD.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_payments');
    }
};
