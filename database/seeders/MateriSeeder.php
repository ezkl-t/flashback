<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('materi')->insert([
            'judul_bab'=>'Bab 1 : Sejarah Kesultanan Banjar',
            'isi_materi'=>'',
            'created_at'=>date('Y-m-d H-i-s'),
        ]);
        DB::table('materi')->insert([
            'judul_bab'=>'Bab 2 : Filsafat Hidup Etnis Banjar',
            'isi_materi'=>'',
            'created_at'=>date('Y-m-d H-i-s'),
        ]);
        DB::table('materi')->insert([
            'judul_bab'=>'Bab 3 : Riwayat Hidup Sultan Suriansyah dan Pangeran Antasari',
            'isi_materi'=>'',
            'created_at'=>date('Y-m-d H-i-s'),
        ]);
        DB::table('materi')->insert([
            'judul_bab'=>'Bab 4 : Riwayat Hidup Syekh Muh. Arsyad al-Banjari',
            'isi_materi'=>'',
            'created_at'=>date('Y-m-d H-i-s'),
        ]);
    }
}
