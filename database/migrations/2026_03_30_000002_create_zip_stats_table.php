<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('zip_stats', function (Blueprint $table) {
            $table->string('zip_code', 10)->primary();
            $table->string('city', 100)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('county', 100)->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->integer('total_centers')->default(0);
            $table->integer('active_centers')->default(0);
            $table->integer('infant_programs')->default(0);
            $table->integer('preschool_programs')->default(0);
            $table->decimal('avg_violation_rate', 5, 2)->nullable();
            $table->integer('population')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zip_stats');
    }
};
