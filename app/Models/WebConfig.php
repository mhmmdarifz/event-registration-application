<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebConfig extends Model
{
    use HasFactory;

    protected $table = 'web_config';

    public static $validationMessage = [
        'name.required' => 'Mohon isi kolom nama',
        'email.required' => 'Mohon isi kolom email',
        'address.required' => 'Mohon isi kolom alamat',
        'phone_number.required' => 'Mohon isi kolom nomor telepon',
        'phone_number.numeric' => 'Nomor telepon tidak boleh memuat huruf',
        'phone_number.regex' => 'Format nomor telepon kurang tepat, gunakan awalan 628',
    ];
}
