<?php

namespace Database\Seeders;

use App\Models\Karyaseni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryaseniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karya = [
            ['image'=> ' ', 'tag'=>'Photography', 'title'=> 'judul1', 'date'=>'01 February 2025'],
            ['image'=> ' ', 'tag'=>'Film', 'title'=> 'judul2', 'date'=>'01 February 2025'],
            ['image'=> ' ', 'tag'=>'Sound', 'title'=> 'judul3', 'date'=>'01 February 2025'],
            ['image'=> ' ', 'tag'=>'Animation', 'title'=> 'judul4', 'date'=>'01 February 2025'],
            ['image'=> ' ', 'tag'=>'Graphic Design', 'title'=> 'judul5', 'date'=>'01 February 2025']
        ];

        foreach ($karya as $karyaseni) {
            Karyaseni::firstOrCreate($karyaseni);
        }
    }
}
