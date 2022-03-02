<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;

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
    return view('index', [
        "title" => "Beranda"
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

// Route::resource('/contact', ContactController::class);


// Route::get('/contact', function () {
//     return view('contact' , [
//         "title" => "Contact"
//     ]);
// });
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
