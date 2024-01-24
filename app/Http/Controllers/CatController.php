<?php

namespace App\Http\Controllers;


use App\Models\CatImage;

class CatController extends Controller
{
    public function index()
    {
        $cats = CatImage::paginate(9);
        return view('cats.index', compact('cats'));
    }
    public function indexApi()
    {
        $cats = CatImage::all();
        return view('cats.index', compact('cats'));
    }
}