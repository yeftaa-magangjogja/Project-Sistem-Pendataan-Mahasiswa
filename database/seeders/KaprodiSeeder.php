<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kaprodi')->insert(
            [
                'user_id' => 1,
                'kode_dosen' => 100,
                'nip' => 123449,
                'name' => 'Vikasari Cahya',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
