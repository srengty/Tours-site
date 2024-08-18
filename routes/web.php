<?php

use App\Http\Controllers\HotelsController;
use App\Models\City;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hotels', [HotelsController::class, 'index']);
Route::get('my-data', function(){
    //return 'Hello World';
    // return [ 'name' => 'John Doe', 'age' => 30,];
    //return '<h1>Hello World</h1>';
    //$data = ['name' => 'John Doe', 'age' => 30,];
    $cities = City::all();
    return view('my-data-view', ['cities' => $cities]);
});
//Route::resource('hotels', HotelsController::class);
/**
 * Route::get()
 * Route::post()
 * Route::put()
 * Route::patch()
 * Route::delete()
 */