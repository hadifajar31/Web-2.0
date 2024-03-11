<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {
        $this->call([RelasiSeeder::class]);
        # Tampilkan informasi berikut bila Seeder telah dilakukan
        $this->command->info('SeederRelasi berhasil.');
    }
}
