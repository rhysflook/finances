<?php

use App\Models\MyList;
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
        Schema::create('my_list_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MyList::class)->constrained()->onDelete('cascade');
            $table->string('item_name');
            $table->text('item_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_list_items');
    }
};
