<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('organizations', function (Blueprint $table) {
            // Daycare specific fields
            $table->string('zip_code', 10)->nullable()->index('idx_zip_code')->after('zip');
            $table->string('age_range', 100)->nullable()->after('zip_code');
            $table->string('age_min', 50)->nullable()->after('age_range');
            $table->string('age_max', 50)->nullable()->after('age_min');
            $table->string('program_type', 100)->nullable()->index()->after('age_max');
            $table->string('facility_type', 100)->nullable()->after('program_type');
            $table->string('child_care_type', 100)->nullable()->after('facility_type');
            $table->integer('max_capacity')->nullable()->after('child_care_type');
            $table->integer('total_educators')->nullable()->after('max_capacity');
            
            // Safety / ratings
            $table->decimal('violation_rate', 5, 2)->nullable()->after('total_educators');
            $table->decimal('avg_violation_rate', 5, 2)->nullable()->after('violation_rate');
            $table->decimal('critical_violation_rate', 5, 2)->nullable()->after('avg_violation_rate');
            $table->string('last_inspection_date', 50)->nullable()->after('critical_violation_rate');
            $table->string('permit_status', 50)->nullable()->after('last_inspection_date');
            $table->string('permit_expiration', 50)->nullable()->after('permit_status');
            
            // Source tracking
            $table->string('source', 50)->nullable()->after('permit_expiration'); // nyc, wa, ca, tx...
            $table->string('external_id', 100)->nullable()->after('source');
            $table->string('borough', 50)->nullable()->after('external_id');
        });
    }

    public function down(): void
    {
        Schema::table('organizations', function (Blueprint $table) {
            $table->dropColumn([
                'zip_code', 'age_range', 'age_min', 'age_max',
                'program_type', 'facility_type', 'child_care_type',
                'max_capacity', 'total_educators',
                'violation_rate', 'avg_violation_rate', 'critical_violation_rate',
                'last_inspection_date', 'permit_status', 'permit_expiration',
                'source', 'external_id', 'borough'
            ]);
        });
    }
};
