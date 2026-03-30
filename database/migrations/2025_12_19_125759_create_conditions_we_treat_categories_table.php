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
        Schema::create('conditions_we_treat_categories', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->text('value')->index('idx_conditions_we_treat_value');

            $table->unique(['value'], 'sqlite_autoindex_conditions_we_treat_categories_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditions_we_treat_categories');
    }
};
