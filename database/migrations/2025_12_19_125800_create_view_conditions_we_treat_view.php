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
        DB::statement("CREATE VIEW view_conditions_we_treat AS
                SELECT 
                    o.id as organization_id,
                    o.name_id,
                    o.rehab_name,
                    c.value as conditions_we_treat_value
                FROM organizations o
                JOIN org_conditions_we_treat oc ON o.id = oc.organization_id
                JOIN conditions_we_treat_categories c ON oc.category_id = c.id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"view_conditions_we_treat\"");
    }
};
