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
        DB::statement("CREATE VIEW view_therapies AS
                SELECT 
                    o.id as organization_id,
                    o.name_id,
                    o.rehab_name,
                    c.value as therapies_value
                FROM organizations o
                JOIN org_therapies oc ON o.id = oc.organization_id
                JOIN therapies_categories c ON oc.category_id = c.id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"view_therapies\"");
    }
};
