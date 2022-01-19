<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Halaman Home';
// });

// Route::get('/about', function () {
//     return 'Halaman About';
// });

// Route::get('/gallery', function () {
//     return 'Halaman Gallery';
// });


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
 });

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Muamar Zidan Tri Antoro",
        "email" => "codeofomiru11@gmail.com",
        "gambar" => "logo.png"
    ]);
});




// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/gallery', function () {
    return view('gallery' , [
        "title" => "Gallery"
    ]);
});