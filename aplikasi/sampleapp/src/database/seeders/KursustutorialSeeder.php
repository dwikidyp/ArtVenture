<?php

namespace Database\Seeders;

use App\Models\Kursustutorial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KursustutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kursus = [
            ['image'=> ' ', 'tag'=>'Photography', 'title'=> 'judul1', 'date'=>'01 February 2025', 'price'=> 'Free'],
            ['image'=> ' ', 'tag'=>'Film', 'title'=> 'judul2', 'date'=>'01 February 2025', 'price'=> '25000'],
            ['image'=> ' ', 'tag'=>'Sound', 'title'=> 'judul3', 'date'=>'01 February 2025', 'price'=> 'Free'],
            ['image'=> ' ', 'tag'=>'Animation', 'title'=> 'judul4', 'date'=>'01 February 2025', 'price'=> '50000'],
            ['image'=> ' ', 'tag'=>'Graphic Design', 'title'=> 'judul5', 'date'=>'01 February 2025', 'price'=> 'Free']
        ];

        foreach ($kursus as $kursustutorial) {
            Kursustutorial::firstOrCreate($kursustutorial);
        }
    }
}
