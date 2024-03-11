<?php

namespace Database\Seeders;

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

        /************************************
         *** SEEDER DOSEN UNTUK RELASI SELANJUTNYA ***
         ***********************************/

        // Kita akan membuat 3 orang mahasiswa sebagai sampel

        $ani = Mahasiswa::create(array(
            'nama' => 'Ani',
            'nim' => 'D015015072'));

        $budi = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nim' => 'D015015088'));

        $nia = Mahasiswa::create(array(
            'nama' => 'Nia',
            'nim' => 'D015015078'));

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
