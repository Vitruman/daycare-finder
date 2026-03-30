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
        Schema::create('aftercare_categories', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->text('value')->index('idx_aftercare_value');

            $table->unique(['value'], 'sqlite_autoindex_aftercare_categories_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aftercare_categories');
    }
};
