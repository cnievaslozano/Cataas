<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatImage;

class CatController extends Controller
{
    public function index(Request $request)
    {
        $query = CatImage::query();


        $cats = $query->paginate(9);

        return view('cats.index', compact('cats'));
    }


}