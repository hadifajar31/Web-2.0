<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    # Tentukan  nama tabel terkait
    // protected $table  = 'mahasiswas';
    // jika aturan penamaan model dan Migration singular dan plural
    // maka code ini tidak perlu digunakan
    
    # Mass Asignment -> bisa menambah data secara bersamaan 
    protected $fillable = ['nama', 'nim'];

    public function wali()
    {
        // model Mahasiswa bisa memliki 1 data dari model wali
        // melalui fk 'id_mahasiswa'
        return $this->hasOne('App\Models\Wali', 'id_mahasiswa');
    }

        /**
     * Relasi One-to-One
     * =================
     */

    public function dosen()
    {
        // data model mahasiswa dimiliki oleh model dosen melalui fk 'id_dosen'
        return  $this->belongsTo('App\Models\Dosen', 'id_dosen');
    }
}
