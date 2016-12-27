<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $users = [

        [ 'name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('123456')],
        [ 'name'=>'sanjay','email'=>'sanjayjasuja26@gmail.com','password'=>Hash::make('123456')],
        ['name'=>'superadmin','email'=>'superadmin@gmail.com','password'=>Hash::make('123456')],


    ];

    DB::table('users')->delete();
   foreach ($users as $user){
       User::insert($user);
   }

    }
}
