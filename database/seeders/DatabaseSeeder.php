<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@daycarehub.us',
            'password' => bcrypt('changeme123!'),
        ]);

        $this->call([
            NycDaycareSeeder::class,
            WaDaycareSeeder::class,
        ]);
    }
}
