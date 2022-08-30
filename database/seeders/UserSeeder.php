<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            ['MasterAdmin','masteradmin@admin.com','12345678',1],
            ['Procurement', 'procurement@admin.com', '12345678',2],
            ['HR ragional', 'hrregional@admin.com', '12345678',3],
            ['HR Area1', 'hrarea1@admin.com', '12345678',4],
            ['HR Area2', 'hrarea2@admin.com', '12345678',4],
            ['HR Area3', 'hrarea3@admin.com', '12345678',4],
            ['HR Area4', 'hrarea4@admin.com', '12345678',4],
            ['HR Area5', 'hrarea5@admin.com', '12345678',4],
            ['HR Area6', 'hrarea6@admin.com', '12345678',4],
            ['HR Area7', 'hrarea7@admin.com', '12345678',4],
            ['HR Area8', 'hrarea8@admin.com', '12345678',4],
            ['HR Area9', 'hrarea9@admin.com', '12345678',4],
            ['HR Area10', 'hrarea10@admin.com', '12345678',4],
            ['HR Area11', 'hrarea11@admin.com', '12345678',4],
            ['HR Area12', 'hrarea12@admin.com', '12345678',4],
            ['FA1', 'fa1@admin.com', '12345678',5],
            ['FA2', 'fa2@admin.com', '12345678',5],
            ['FA3', 'fa3@admin.com', '12345678',5],
            ['FA4', 'fa4@admin.com', '12345678',5],
            ['FA5', 'fa5@admin.com', '12345678',5],
            ['FA6', 'fa6@admin.com', '12345678',5],
            ['FA7', 'fa7@admin.com', '12345678',5],
            ['FA8', 'fa8@admin.com', '12345678',5],
            ['FA9', 'fa9@admin.com', '12345678',5],
            ['FA10', 'fa10@admin.com', '12345678',5],
            ['FA11', 'fa11@admin.com', '12345678',5],
            ['FA12', 'fa12@admin.com', '12345678',5],
            ['FA13', 'fa13@admin.com', '12345678',5],
            ['TL', 'tl@admin.com', '12345678',6],
            ['SS1', 'ss1@admin.com', '12345678',7],
            ['SS2', 'ss2@admin.com', '12345678',7],
            ['SS3', 'ss3@admin.com', '12345678',7],
            ['SS4', 'ss4@admin.com', '12345678',7],
            ['SS5', 'ss5@admin.com', '12345678',7],
        ];
        $count = count($admins);
        for ($i = 0; $i < $count; $i++) {
            DB::table('users')->insert([
                ['nama_mitra' => $admins[$i][0],
                'email'=> $admins[$i][1],
                'password' => Hash::make('12345678'),
                'Role' => $admins[$i][3]
                ]
            ]);
         }
    }
}