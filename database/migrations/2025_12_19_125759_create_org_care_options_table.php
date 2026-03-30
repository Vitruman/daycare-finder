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
        Schema::create('org_care_options', function (Blueprint $table) {
            $table->integer('organization_id')->index('idx_org_care_options_org');
            $table->integer('category_id')->index('idx_org_care_options_cat');

            $table->primary(['organization_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_care_options');
    }
};
