<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotels::all();
        return view('hotels.index', ['hotels' => $hotels]);
    }

}
