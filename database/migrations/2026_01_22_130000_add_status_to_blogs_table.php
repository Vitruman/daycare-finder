<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (!Schema::hasColumn('blogs', 'status')) {
                $table->string('status')->default('draft')->index();
            }
        });

        if (Schema::hasColumn('blogs', 'is_published') && Schema::hasColumn('blogs', 'status')) {
            DB::table('blogs')->update([
                'status' => DB::raw("CASE WHEN is_published = 1 THEN 'publish' ELSE 'draft' END"),
            ]);
        }
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (Schema::hasColumn('blogs', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
};

