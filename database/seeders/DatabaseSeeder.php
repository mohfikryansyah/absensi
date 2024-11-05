<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Office;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Office::create([
            'name' => 'Rumah Fiqri',
            'latitude' => 0.5544040,
            'longitude' => 123.0243874,
            'clock_in' => '07:00',
            'clock_out' => '17:00',
            'radius' => 100
        ]);

        $admin = \App\Models\User::factory()->create([
            'name' => 'ADMIN',
            'email' => 'moh.fikryansyah@gmail.com',
        ]);

        $staff = \App\Models\User::factory()->create([
            'name' => 'STAFF',
            'email' => 'fiq@gmail.com',
        ]);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'kasubag']);
        Role::create(['name' => 'staff']);

        Attendance::factory(139)->create();

        $admin->assignRole('admin');
        $staff->assignRole('staff');

        $this->call([
            DevisiSeeder::class
        ]); 
    }
}
