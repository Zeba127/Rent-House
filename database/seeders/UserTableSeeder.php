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

            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt(123456),
             'role'=>'admin',
             'address'=>'abc',
             'phonenumber'=>'1234567890',
             'occupation'=>'service',
             'image'=>'image',
             'nidnumber'=>'9876543211000',
             'bkashrocketnumber'=>'01836695158',



        ]);


    }
}
