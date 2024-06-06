<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MadingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;

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

// AUTH SECTION
Route::get('/login', function () {
    return view('login');
})->name('viewLogin');

Route::get('/register', function () {
    return view('register');
})->name('viewRegister');;

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/kurikulum', function () {
    return view('kurikulum');
});

Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/guru', [GuruController::class, 'publicIndex'])->name('guru.publicIndex');
Route::get('/mading', [MadingController::class, 'publicIndex'])->name('mading.publicIndex');
Route::get('public-fasilitas', [FasilitasController::class, 'publicIndex'])->name('fasilitas.publicIndex');
Route::get('/daftar', [DaftarController::class, 'publicIndex'])->name('daftar.publicIndex');


Route::group(['middleware' => ['auth']], function () {

    Route::resource('madings', MadingController::class);

    Route::resource('gurus', GuruController::class);

    Route::resource('fasilitas', FasilitasController::class);

    //Daftar
    Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store');
    Route::get('/daftar/index', [DaftarController::class, 'index'])->name('daftar.index');
    Route::get('/daftar/{id}/edit', [DaftarController::class, 'edit'])->name('daftar.edit');
    Route::put('/daftar/{id}', [DaftarController::class, 'update'])->name('daftar.update');
    Route::delete('/daftar/{id}', [DaftarController::class, 'destroy'])->name('daftar.destroy');

    // Route::get('/daftar', function () {
    //     return view('daftar');
    // });

    Route::get('/aduan', function () {
        return view('aduan');
    });

    // ADMIN PAGE
    Route::get('/dashboard_admin', function () {
        return view('dashboard_admin');
    })->name('adminPanel');
});


