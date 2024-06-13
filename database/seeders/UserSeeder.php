<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // static
        // DB::table(table: 'users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@japanauto.mt',
        //     'password' => 'password',
        // ]);

        $user = new User([
            'name' => 'admin',
            'email' => 'admin@japanauto.mt',
            'password' => 'password',
        ]);

        $user->save();

        $user = new User([
            'name' => 'stella',
            'email' => 'stella@japanauto.mt',
            'password' => 'password',
        ]);


        $user->save();


    }
}
