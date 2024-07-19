<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(

            ['name' => 'zouhour',
                'email'=>'zouhourBticha.i@gmail.com',
                'password'=>Hash::make('zouhour')],
            );
        DB::table('users')->insert(

            ['name' => 'julie',
                'email'=>'julie@gmail.com',
                'password'=>Hash::make('julie')],
            );
    }
}
