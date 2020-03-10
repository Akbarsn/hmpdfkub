<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'hmpdfkub@gmail.com',
            'username'=>'admin',
            'password'=>'$2y$10$.3FgGwK91iMpSc9CWwsBcOsVxZnlKDGaoh7FxBkXrb4/oF/qv3OCK'
        ]);
    }
}
