<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Setting::setValue('phone', '+1 (555) 123-4567');
        \App\Models\Setting::setValue('email', 'info@recovered.com');
        \App\Models\Setting::setValue('site_name', 'Recovered');
        \App\Models\Setting::setValue('site_description', 'Recovery and rehabilitation support');
    }
}
