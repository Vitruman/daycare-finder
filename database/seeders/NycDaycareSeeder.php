<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NycDaycareSeeder extends Seeder
{
    public function run(): void
    {
        $csvPath = storage_path('app/data/nyc.csv');
        
        if (!file_exists($csvPath)) {
            $this->command->error("File not found: $csvPath");
            $this->command->info("Copy nyc.csv to storage/app/data/nyc.csv");
            return;
        }

        $handle = fopen($csvPath, 'r');
        $headers = fgetcsv($handle);
        $headers = array_map('trim', $headers);

        $count = 0;
        $skipped = 0;
        $batch = [];

        $this->command->info("Importing NYC daycare data...");

        while (($row = fgetcsv($handle)) !== false) {
            $data = array_combine($headers, $row);
            
            // Only active/permitted
            if (!in_array($data['Status'] ?? '', ['Permitted', 'Active'])) {
                $skipped++;
                continue;
            }

            $nameId = Str::slug(
                ($data['Center Name'] ?? '') . '-' . 
                ($data['Borough'] ?? '') . '-' . 
                ($data['ZipCode'] ?? '') . '-' .
                ($data['Day Care ID'] ?? '')
            );

            if (empty($nameId) || $nameId === '---') continue;

            $batch[] = [
                'name_id'              => $nameId,
                'rehab_name'           => $data['Center Name'] ?? '',
                'phone'                => $data['Phone'] ?? null,
                'website'              => $data['URL'] ?? null,
                'street1'              => trim(($data['Building'] ?? '') . ' ' . ($data['Street'] ?? '')),
                'city'                 => $data['Borough'] ?? '',
                'state'                => 'NY',
                'zip'                  => $data['ZipCode'] ?? null,
                'zip_code'             => $data['ZipCode'] ?? null,
                'age_range'            => $data['Age Range'] ?? null,
                'program_type'         => $data['Program Type'] ?? null,
                'facility_type'        => $data['Facility Type'] ?? null,
                'child_care_type'      => $data['Child Care Type'] ?? null,
                'max_capacity'         => is_numeric($data['Maximum Capacity'] ?? '') ? (int)$data['Maximum Capacity'] : null,
                'total_educators'      => is_numeric($data['Total Educational Workers'] ?? '') ? (int)$data['Total Educational Workers'] : null,
                'violation_rate'       => is_numeric($data['Violation Rate Percent'] ?? '') ? (float)$data['Violation Rate Percent'] : null,
                'avg_violation_rate'   => is_numeric($data['Average Violation Rate Percent'] ?? '') ? (float)$data['Average Violation Rate Percent'] : null,
                'critical_violation_rate' => is_numeric($data['Critical Violation Rate'] ?? '') ? (float)$data['Critical Violation Rate'] : null,
                'last_inspection_date' => $data['Inspection Date'] ?? null,
                'permit_status'        => $data['Status'] ?? null,
                'permit_expiration'    => $data['Permit Expiration'] ?? null,
                'borough'              => $data['Borough'] ?? null,
                'source'               => 'nyc',
                'external_id'          => $data['Day Care ID'] ?? null,
                'latitude'             => null,
                'longitude'            => null,
                'created_at'           => now(),
            ];

            $count++;

            if (count($batch) >= 500) {
                Organization::upsert($batch, ['name_id'], array_keys($batch[0]));
                $batch = [];
                $this->command->info("  Imported $count records...");
            }
        }

        // Insert remaining
        if (!empty($batch)) {
            Organization::upsert($batch, ['name_id'], array_keys($batch[0]));
        }

        fclose($handle);

        $this->command->info("✅ NYC: $count active centers imported, $skipped skipped");
    }
}
