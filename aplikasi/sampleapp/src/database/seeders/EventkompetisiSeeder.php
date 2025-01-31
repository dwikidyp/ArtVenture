<?php

namespace Database\Seeders;

use App\Models\Eventkompetisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventkompetisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = [
            ['image'=> ' ', 'tag'=>'Photography', 'title'=> 'judul1', 'date'=>'01 February 2025', 'fee_registration'=> 'Free'],
            ['image'=> ' ', 'tag'=>'Film', 'title'=> 'judul2', 'date'=>'01 February 2025', 'fee_registration'=> '25000'],
            ['image'=> ' ', 'tag'=>'Sound', 'title'=> 'judul3', 'date'=>'01 February 2025', 'fee_registration'=> 'Free'],
            ['image'=> ' ', 'tag'=>'Animation', 'title'=> 'judul4', 'date'=>'01 February 2025', 'fee_registration'=> '50000'],
            ['image'=> ' ', 'tag'=>'Graphic Design', 'title'=> 'judul5', 'date'=>'01 February 2025', 'fee_registration'=> 'Free']
        ];

        foreach ($event as $eventkompetisi) {
            Eventkompetisi::firstOrCreate($eventkompetisi);
        }
    }
}
