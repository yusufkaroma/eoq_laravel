<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        DB::table('users')->insert([
            [
                'username' => 'satria',
                'id_bagian' => 7,
                'hp_pegawai' => '08',
                'alamat_pegawai' => 'alamat',
                'nama_pegawai' => 'satria',
                'password' => Hash::make('satria'),
            ],
            [
                'username' => 'mini',
                'id_bagian' => 12,
                'hp_pegawai' => '08',
                'alamat_pegawai' => 'alamat',
                'nama_pegawai' => 'mini',
                'password' => Hash::make('mini'),
            ],
            [
                'username' => 'amir',
                'id_bagian' => 8,
                'hp_pegawai' => '08',
                'alamat_pegawai' => 'alamat',
                'nama_pegawai' => 'amir',
                'password' => Hash::make('amir'),
            ],
            [
                'username' => 'sandi',
                'id_bagian' => 9,
                'hp_pegawai' => '08',
                'alamat_pegawai' => 'alamat d',
                'nama_pegawai' => 'sandi',
                'password' => Hash::make('sandi'),
            ],
        ]);
    }
}
