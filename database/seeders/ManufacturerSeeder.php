<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'manufacturers')->insert([
            'name' => 'Toyota',
            'address' => 'HQ, Kyoto District, Tokyo, Japan',
            'phone' => '+1 800 233 8232',
        ]);

        DB::table(table: 'manufacturers')->insert([
            'name' => 'Mazda',
            'address' => '3-1 Shinchi, Fuchū, Hiroshima, Japan',
        ]);

        DB::table(table: 'manufacturers')->insert([
            'name' => 'Honda',
            'phone' => '+1 800 233 8888',
        ]);

    }
}
