<?php

use App\Models\Project;
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
        Schema::table('in_items', function (Blueprint $table) {
            $table->foreignIdFor(Project::class)->default(1);
        });
        Schema::table('incubation_items', function (Blueprint $table) {
            $table->foreignIdFor(Project::class)->default(1);
        });
        Schema::table('todos', function (Blueprint $table) {
            $table->foreignIdFor(Project::class)->default(1);
        });
        Schema::table('scheduled_items', function (Blueprint $table) {
            $table->foreignIdFor(Project::class)->default(1);
        });
        Schema::table('reference_items', function (Blueprint $table) {
            $table->foreignIdFor(Project::class)->default(1);
        });
        Schema::table('my_lists', function (Blueprint $table) {
            $table->foreignIdFor(Project::class)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('relevant_tables', function (Blueprint $table) {
            //
        });
    }
};
