<?php

use App\Models\Category;
use App\Models\SubCategory;
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
        Schema::create('credit_card_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('credit_card_id')
                ->constrained('credit_cards')
                ->onDelete('cascade')
                ->comment('Foreign key to the credit_cards table, indicating which credit card the payment is associated with.');
            $table->bigInteger('amount')
                ->comment('The amount of the payment made towards the credit card.');
            $table->date('payment_date')
                ->comment('The date when the payment was made, in YYYY-MM-DD format.');
            $table->string('name');
            $table->foreignIdFor(Category::class)
                ->constrained()
                ->onDelete('cascade')
                ->comment('Foreign key to the categories table, indicating the category of the payment.');
            $table->foreignIdFor(SubCategory::class)
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->comment('Foreign key to the subcategories table, indicating the subcategory of the payment, if applicable.');
            $table->string('vendor')
                ->nullable()
                ->comment('Optional vendor or merchant associated with the payment, providing context on where the payment was made.');
            $table->boolean('is_paid')->default(false)
                ->comment('Indicates whether the payment has been made or not. Defaults to false.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_card_payments');
    }
};
