<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

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
    # Temukan mahasiswa dengan D015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim','=','D015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

// relasi one to many
Route::get('relasi-2', function () {
    # Temukan mahasiswa dengan D015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim','=','D015015072')->first();

    # Tampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function(){
    # Temukan dosen dengan yang bernama Eko
    $dosen = App\Models\Dosen::where('nama','=','Eko')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp){
        echo '<li> Nama: ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
    }
});