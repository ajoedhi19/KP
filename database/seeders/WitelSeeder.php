<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WitelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $witels = [
            ['Witel Denpasar'],
            ['Witel Gresik'],
            ['Witel Jember'],
            ['Witel Kediri'],
            ['Witel Kupang'],
            ['Witel Madiun'],
            ['Witel Malang'],
            ['Witel Mataram'],
            ['Witel Pasuruan'],
            ['Witel Sidoarjo'],
            ['Witel Singaraja'],
            ['Witel Surabaya']
        ];

        $count = count($witels);
        for($i = 0; $i < $count; $i++)
        {
            DB::table('witels')->insert([
                ['Nama_Witel'=> $witels[$i][0]]
            ]);
        }
    }
}