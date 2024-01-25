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
            'email' => 'arifmahendra@gmail.com',
            'phone_number' => '0895365280807',
            'password' => bcrypt('12341234'),
            'level' => 'super-admin',
        ]);

        Admin::factory()->create([
            'name' => 'Rico Pahlefi',
            'email' => 'ricopahlefi@gmail.com',
            'phone_number' => '089528597031',
            'password' => bcrypt('12341234'),
        ]);
    }
}
