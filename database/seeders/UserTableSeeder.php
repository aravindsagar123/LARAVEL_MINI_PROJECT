<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name'=>'aravind',
            'email'=>'aravindsagar201544@gmail.com',
            'username'=>'aravindsagar201544@gmail.com',
            'password'=>bcrypt('aravind123'),
            'phone_no'=>'6282552805',
            'type'=>'admin',
        ]);
        
    }
}
