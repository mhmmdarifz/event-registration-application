<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyTicketController extends Controller
{
    function index()
    {
        $data['title'] = 'Beli Tiket';

        return view('buy-ticket', $data);
    }

    function buyTicket(Request $request)
    {
        return $request->all();
    }
}
