<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Sebastian Guerra";

    return view('home.about')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("description", $description)
        ->with("author", $author);
})->name("home.about");

Route::get('/contact', function () {
    $data1 = "Contact - Online Store";
    $data2 = "Contact";
    $author = "Sebastian Guerra";
    $contactNumber = "+1 7800 555 3247";
    $email = "sebasdoe@gmail.com";
    $address = "Cll 97 #67-23";

    return view('home.contact')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("author", $author)
        ->with("contactNumber", $contactNumber)
        ->with("email", $email)
        ->with("address", $address);
})->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");