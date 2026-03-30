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
        Schema::create('organizations', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->text('name_id')->index('idx_name_id');
            $table->text('rehab_name')->index('idx_rehab_name');
            $table->text('about')->nullable();
            $table->text('location')->nullable();
            $table->text('phone')->nullable();
            $table->text('website')->nullable();
            $table->text('accreditation')->nullable();
            $table->text('founded')->nullable();
            $table->text('treatment_focus')->nullable();
            $table->text('typical_program_length')->nullable();
            $table->text('occupancy')->nullable();
            $table->text('providers_policy')->nullable();
            $table->text('street1')->nullable();
            $table->text('street2')->nullable();
            $table->text('city')->nullable()->index('idx_city');
            $table->text('state')->nullable()->index('idx_state');
            $table->text('zip')->nullable()->index('idx_zip');
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->text('services')->nullable();
            $table->text('logo')->nullable();
            $table->text('images')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();

            $table->unique(['name_id'], 'sqlite_autoindex_organizations_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
