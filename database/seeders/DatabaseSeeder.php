<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        DB::table('wintermelon')->insert([
            'name'          =>  'Rapmon',
            'address'       =>  'Busan',
            'flavor'        =>  'Matcha'
        ]);

        DB::table('wintermelon')->insert([
            'name'          =>  'Jungkook',
            'address'       =>  'Busan',
            'flavor'        =>  'Taro'
        ]);

        DB::table('wintermelon')->insert([
            'name'          =>  'Jhope',
            'address'       =>  'Gwangju',
            'flavor'        =>  'Okinawa'
        ]);
    }
}