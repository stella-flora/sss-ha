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
            'phone' => '81 (82) 282-1111'
        ]);

        DB::table(table: 'manufacturers')->insert([
            'name' => 'Honda',
            'address' => '2-1-1, Minami-Aoyama, Minato-ku, Tokyo 107-8556, Japan',
            'phone' => '+81-(0)3-3423-1111',
        ]);

        DB::table(table: 'manufacturers')->insert([
            'name' => 'Nissan',
            'address' => '-1, Takashima 1-chome, Nishi-ku, Yokohama-shi, Kanagawa 220-8686, Japan',
            'phone' => '+81(0)45-523-5771',
        ]);


        DB::table(table: 'manufacturers')->insert([
            'name' => 'Mitsubishi',
            'address' => 'Marunouchi Park Building, Marunouchi, Chiyoda, Tokyo, Japan',
            'phone' => '+81-42-763-0807',
        ]);

        DB::table(table: 'manufacturers')->insert([
            'name' => 'Suzuki',
            'address' => '300 Takatsukachō, Minami Ward, Hamamatsu, Shizuoka 432-8611, Japan',
            'phone' => '0800 048 2697',
        ]);

        DB::table(table: 'manufacturers')->insert([
            'name' => 'Subaru',
            'address' => 'Ebisu Subaru Bldg., 1-20-8, Ebisu, Shibuya-Ku, Tokyo, 150-8554, Japan',
            'phone' => '0120-052215',
        ]);

    }
}
