<?php

namespace Database\Seeders;

use App\Models\Devisi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DevisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Devisi::create([
            'name' => 'Perencanaan, Evaluasi  dan Keuangan',
            'ketua' => 1,
        ]);
        Devisi::create([
            'name' => 'Umum dan Kepegawaian',
            'ketua' => 2,
        ]);
    }
}
