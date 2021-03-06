<?php

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
        DB::table('users')->truncate();

        DB::table('users')->insert([
           [
              'name'=>'Niklesh',
               'email'=>'niklesh@gmail.com',
               'password'=>bcrypt('secret')
           ] ,

            [
                'name'=>'Gokarna',
                'email'=>'gokarna@gmail.com',
                'password'=>bcrypt('secret')
            ] ,
        ]);
    }
}
