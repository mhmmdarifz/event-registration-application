<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    function index()
    {
        $data['title'] = 'Galeri';

        return view('landing.gallery', $data);
    }
}
