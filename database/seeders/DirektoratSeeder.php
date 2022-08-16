<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirektoratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $direktorats = [
            ['construction'],
            ['Corporate Office Group'],
            ['Finance'],
            ['Human Capital Management & Strategy'],
            ['Operation'],
            ['Supply and Commerce'],

        ];

        $count = count($direktorats);
        for($i = 0; $i < $count; $i++)
        {
            DB::table('direktorats')->insert([
                ['Nama_Direktorat'=> $direktorats[$i][0]]
            ]);
        }
    }
}