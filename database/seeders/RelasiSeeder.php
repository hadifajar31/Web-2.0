<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Wali;
use DB;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        // Siapkan Seeder Dosen disini
        DB::table('dosens')->delete();
        $dosen = Dosen::create(array(
            'nama' => 'Eko',
            'nipd' => '1234567890'));
        # Kemudian tambahkan nilai id_dosen ditiap record mahasiswa

        // Kita akan membuat 3 orang mahasiswa sebagai sampel

        $ani = Mahasiswa::create(array(
            'nama' => 'Ani',
            'nim' => 'D015015072',
            'id_dosen' => $dosen->id));
            
        $budi = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nim' => 'D015015088',
            'id_dosen' => $dosen->id));
            
            $nia = Mahasiswa::create(array(
            'nama' => 'Nia',
            'nim' => 'D015015078',
            'id_dosen' => $dosen->id));

        # Informasi ketika mahasiswa telah diisi.
        $this->command->info('Mahasiswa telah diisi!');

        // Disini kita akan menggunakan ketiga variabel yang kita
        // deklarasikan diatas yaitu '$ani', '$budi' , ' $nia'
        // dengan cara mengambil id dari masing-masing variabel yang
        // baru saja di isi.

        # Ciptakan wali si $ani
        Wali::create(array(
            'nama' => 'Henny A',
            'id_mahasiswa' => $ani->id,
        ));

        # Ciptakan wali si $budi
        Wali::create(array(
            'nama' => 'Andi S',
            'id_mahasiswa' => $budi->id,
        ));

        # Ciptakan wali si $nia
        Wali::create(array(
            'nama' => 'Viki D',
            'id_mahasiswa' => $nia->id,
        ));

        # Informasi ketika wali telah diisi.
        $this->command->info('Data Mahasiswa dan Wali telah diisi!');

        /************************************
         *** SEEDER HOBI UNTUK RELASI SELANJUTNYA ***
         ***********************************/

        // 
        
    }
}
