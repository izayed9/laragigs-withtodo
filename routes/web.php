<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings',  [
        'heading' => 'Latest Heading',
        'listings' => Listing::all(),
    ]);
});


// single listing 


Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        "listing" => Listing::find($id),
    ]);
});


Route::get('/posts', 'PostController@index')->name('posts.index');
