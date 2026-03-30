<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE VIEW view_approaches AS
                SELECT 
                    o.id as organization_id,
                    o.name_id,
                    o.rehab_name,
                    c.value as approaches_value
                FROM organizations o
                JOIN org_approaches oc ON o.id = oc.organization_id
                JOIN approaches_categories c ON oc.category_id = c.id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"view_approaches\"");
    }
};
