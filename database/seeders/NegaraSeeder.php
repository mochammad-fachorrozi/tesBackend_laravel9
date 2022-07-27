<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negaras')->insert([
            'kd_negara' => 'AS',
            'nm_negara' => 'AMERIKA SERIKAT',
        ]);
        DB::table('negaras')->insert([
            'kd_negara' => 'HK',
            'nm_negara' => 'HONGKONG',
        ]);
        DB::table('negaras')->insert([
            'kd_negara' => 'ID',
            'nm_negara' => 'INDONESIA',
        ]);
        DB::table('negaras')->insert([
            'kd_negara' => 'IN',
            'nm_negara' => 'INDIA',
        ]);
    }
}
