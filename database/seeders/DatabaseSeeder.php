<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $admin->assignRole('admin');
        $staff->assignRole('staff');
    }
}
