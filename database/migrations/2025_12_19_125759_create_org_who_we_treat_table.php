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
        Schema::create('org_who_we_treat', function (Blueprint $table) {
            $table->integer('organization_id')->index('idx_org_who_we_treat_org');
            $table->integer('category_id')->index('idx_org_who_we_treat_cat');

            $table->primary(['organization_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_who_we_treat');
    }
};
