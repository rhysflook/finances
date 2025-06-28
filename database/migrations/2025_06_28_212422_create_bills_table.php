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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('bill');
            $table->bigInteger('amount')->nullable()
                ->comment('The amount of the bill, stored as an integer to represent the smallest currency unit (e.g., cents for USD). This field is nullable to allow for bills that may not have a specified amount at the time of creation or for varying amounts such as electricity, gas, etc.');
            $table->boolean('is_fixed_amount')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
