<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WaDaycareSeeder extends Seeder
{
    public function run(): void
    {
        $csvPath = storage_path('app/data/washington.csv');

        if (!file_exists($csvPath)) {
            $this->command->error("File not found: $csvPath");
            return;
        }

        $handle = fopen($csvPath, 'r');
        $headers = fgetcsv($handle);
        $headers = array_map('trim', $headers);

        $count = 0;
        $batch = [];

        while (($row = fgetcsv($handle)) !== false) {
            $data = array_combine($headers, $row);

            if (strtolower($data['LatestOperatingStatus'] ?? '') !== 'active') continue;

            $nameId = Str::slug(
                ($data['ProviderName'] ?? '') . '-' .
                ($data['PhysicalCity'] ?? '') . '-' .
                ($data['WacompassId'] ?? '')
            );

            if (empty($nameId)) continue;

            $batch[] = [
                'name_id'         => $nameId,
                'rehab_name'      => $data['ProviderName'] ?? $data['DoingBusinessAs'] ?? '',
                'phone'           => $data['PrimaryContactPhoneNumber'] ?? null,
                'street1'         => $data['PhysicalStreetAddress'] ?? null,
                'city'            => $data['PhysicalCity'] ?? null,
                'state'           => 'WA',
                'zip'             => $data['PhysicalZip'] ?? null,
                'zip_code'        => $data['PhysicalZip'] ?? null,
                'age_range'       => trim(($data['StartingAge'] ?? '') . ' — ' . ($data['EndingAge'] ?? '')),
                'age_min'         => $data['StartingAge'] ?? null,
                'age_max'         => $data['EndingAge'] ?? null,
                'max_capacity'    => is_numeric($data['LicenseCapacity'] ?? '') ? (int)$data['LicenseCapacity'] : null,
                'facility_type'   => $data['FacilityTypeGeneric'] ?? null,
                'permit_status'   => $data['LatestOperatingStatus'] ?? null,
                'latitude'        => is_numeric($data['PhyscialLatitude'] ?? '') && $data['PhyscialLatitude'] != '0.0000' ? (float)$data['PhyscialLatitude'] : null,
                'longitude'       => is_numeric($data['PhysicalLongitude'] ?? '') && $data['PhysicalLongitude'] != '0.0000' ? (float)$data['PhysicalLongitude'] : null,
                'source'          => 'wa',
                'external_id'     => $data['WacompassId'] ?? null,
                'created_at'      => now(),
            ];

            $count++;
            if (count($batch) >= 500) {
                Organization::upsert($batch, ['name_id'], array_keys($batch[0]));
                $batch = [];
            }
        }

        if (!empty($batch)) {
            Organization::upsert($batch, ['name_id'], array_keys($batch[0]));
        }

        fclose($handle);
        $this->command->info("✅ Washington: $count centers imported");
    }
}
