<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $artists = $this->artists;
        return view('index', [
            'artists' => $artists
        ]);
    }
}
