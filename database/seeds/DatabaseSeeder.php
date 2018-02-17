<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Ezequiel Cardoso',
            'email' => 'dev@zimeonline.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
