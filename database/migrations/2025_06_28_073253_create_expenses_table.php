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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('amount');
            $table->string('category');
            $table->string('subcategory')->nullable()
                ->comment('Optional subcategory for more detailed classification of the expense.');
            $table->string('vendor')->nullable()
                ->comment('Optional vendor or merchant associated with the expense, providing context on where the expense was incurred.');
            $table->string('description')->nullable()
                ->comment('Optional description of the expense, providing additional context or details.');
            $table->foreignIdFor(\App\Models\Currency::class)
                ->constrained()
                ->onDelete('cascade')
                ->comment('Foreign key to the currencies table, indicating the currency of the expense amount.');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
