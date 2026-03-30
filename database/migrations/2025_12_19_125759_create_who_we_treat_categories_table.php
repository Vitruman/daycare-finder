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
        Schema::create('who_we_treat_categories', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->text('value')->index('idx_who_we_treat_value');

            $table->unique(['value'], 'sqlite_autoindex_who_we_treat_categories_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('who_we_treat_categories');
    }
};
