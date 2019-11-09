<?php

use Illuminate\Database\Seeder;

class DatamahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datamahasiswa=[
            [
                'nama'=>'Degi Candra Kamarullah',
                'alamat'=>'Jl Kebon Nanas Utara, Jakarta Timur',
                'jurusan'=>'Teknik Informatika'
            ],
            [
                'nama'=>'Salma Dwi Meisyanie',
                'alamat'=>'Jl Matraman Raya, Jakarta Pusat',
                'jurusan'=>'Sistem Informasi'
            ],
            [
                'nama'=>'Ibnu Kurnia',
                'alamat'=>'Jl Padepokan Raya, Depok',
                'jurusan'=>'Manajemen'
            ],  
        ];
        DB::table('mahasiswa')->insert($datamahasiswa);
    }
}
