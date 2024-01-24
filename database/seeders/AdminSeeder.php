<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Muhammad Arif Mahendra',
            'email' => 'arif@gmail.com',
            'phone_number' => '089528597031',
            'password' => bcrypt('12341234'),
            'level' => 'super-admin',
        ]);

        Admin::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'phone_number' => '089689255114',
            'password' => bcrypt('12341234'),
        ]);
    }
}
