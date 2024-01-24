<?php

namespace Database\Seeders;

use App\Models\WebConfig;
use Illuminate\Database\Seeder;

class WebConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebConfig::factory()->create([
            'name' => 'Sukaria',
            'email' => 'baznaskab.ketapang@baznas.go.id',
            'phone_number' => '62895365280807',

            'address' => 'Jl. Basuki Rahmat No. 103, Kecamatan Delta Pawan, Kabupaten Ketapang',
            'latitude' => -7.279027,
            'longitude' => 112.808132,
            'whatsapp_gateway_token' => 'XR9154bgT7ZS1Nk38RYb2WnEEe5pfsfSnpVu5M1y2gV9L1CZ34',
        ]);
    }
}
