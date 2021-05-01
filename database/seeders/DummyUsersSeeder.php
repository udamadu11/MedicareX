<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Admin',
               'email'=>'johndoe@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('07070707'),
               'telephone' => '0773527343',
                'nic' => '962100686v',
            ],
            [
               'name'=>'Regular User',
               'email'=>'reguser@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('07070707'),
               'telephone' => '0773527343',
                'nic' => '962100686v',
            ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
