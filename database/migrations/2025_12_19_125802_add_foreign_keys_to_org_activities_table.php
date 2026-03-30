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
        Schema::table('org_activities', function (Blueprint $table) {
            $table->foreign(['category_id'], null)->references(['id'])->on('activities_categories')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['organization_id'], null)->references(['id'])->on('organizations')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('org_activities', function (Blueprint $table) {
            $table->dropForeign();
            $table->dropForeign();
        });
    }
};
