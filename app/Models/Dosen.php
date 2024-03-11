<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nipd'];

    /**
     * Relasi One to-Many
     * ==================
     * Buat funtion bernama mahasiswa(), dimana model 'dosen' akan memiliki
     * relasi One-to-many terhadap model 'mahasiswa' melalui 'id_dosen'
     */
    public function mahasiswa() 
    {
        return $this->hasMany('App\Models\Mahasiswa', 'id_dosen');
    }
}
