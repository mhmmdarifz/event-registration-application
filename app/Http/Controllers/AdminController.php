<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        $data['title'] = 'Beranda';

        return view('admin.template.base', $data);
    }
}
