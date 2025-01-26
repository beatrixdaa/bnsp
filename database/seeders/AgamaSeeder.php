<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agamas = [
            ['nama' => 'Islam'],
            ['nama' => 'Kristen'],
            ['nama' => 'Katolik'],
            ['nama' => 'Hindu'],
            ['nama' => 'Budha'],
            ['nama' => 'Konghucu'],
        ];
        foreach ($agamas as $agama) {
            Agama::create($agama);
        }
    }
}
