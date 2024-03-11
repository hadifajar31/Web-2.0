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

Route::get('/', function () {
    return view('welcome');
});

// relasi 1 - one to one
Route::get('relasi-1', function () {
    # Temukan  mahasiswa dengan D015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim','=','D015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});
