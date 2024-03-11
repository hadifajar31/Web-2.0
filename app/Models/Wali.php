<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    # Tentukan nama tabel terkait
    // protected $table = 'wali';

    # MASS ASSIGMENT
    # Untuk membatasi atribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama', 'id_mahasiswa'];

    /* 
    * Relasi One-to-One 
    * ==================
    * Sebaliknya, buat funtion  bernama mahasiswa(), dimana model 'wali' memiliki relasi One-to-One (belongsTo)
    * sebagai timbal balik model 'Mahasiswa' melalui 'id_mahasiswa'
    */
    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa', 'id_mahasiswa');
    }
}
