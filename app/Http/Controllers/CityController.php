<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create()
    {
        return view('cities.create');
    }
    public function store(Request $request)
    {
        $city = new \App\Models\City();
        $city->city = $request->city;
        $city->save();
        return redirect('/my-data');
    }
}
