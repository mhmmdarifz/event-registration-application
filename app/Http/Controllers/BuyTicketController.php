<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class BuyTicketController extends Controller
{
    function index()
    {
        $data['title'] = 'Beli Tiket';

        return view('landing.buy-ticket', $data);
    }

    function buyTicket(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'ticket' => 'required',
        ], [
            'name.required' => 'mohon isi kolom nama',
            'phone_number.required' => 'mohon isi kolom komentar',
            'email.required' => 'mohon isi kolom email',
            'ticket.required' => 'mohon pilih jenis ticket',
        ]);

        $data = new Visitor;
        $data->name = $request->name;
        $data->phone_number = $request->phone_number;
        $data->email = $request->email;
        $data->ticket = $request->ticket;
        $data->save();

        return response()->json([
            'status' => 200,
            'message' => 'Tiket berhasil dipesan.'
        ]);
    }
}
