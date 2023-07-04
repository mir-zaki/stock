<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'username'=>'admin',
            'fullname'=>'Admin',
            'type'=>'admin',
            'phone'=>'00000000000',
            'password'=>bcrypt('admin'),


        ]);

    }
}
