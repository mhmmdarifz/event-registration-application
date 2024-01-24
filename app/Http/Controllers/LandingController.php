<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\WebConfig;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index()
    {
        $data['web'] = WebConfig::first();

        return view('index', $data);
    }

    function addSubscriber(Request $request)
    {
        $check = Subscriber::where('email', $request->email)->first();

        if ($check) {
            return response()->json([
                'status' => 422,
                'message' => 'Email sudah terdaftar',
            ]);
        } else {
            $data = new Subscriber;
            $data->email = $request->email;
            $data->save();

            return response()->json([
                'status' => 200,
                'message' => 'Email anda berhasil didaftarkan',
            ]);
        }
    }
}
