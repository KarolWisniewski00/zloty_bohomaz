<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $artists = $this->artists;
        return view('article', [
            'artists' => $artists
        ]);
    }
}
