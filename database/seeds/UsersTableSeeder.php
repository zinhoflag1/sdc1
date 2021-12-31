<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Nome será 'admin'
            'name' => 'demetrio',
            // ==
            'email' => 'demetrio.passos@defesacivil.mg.gov.br',
            
            // senha123 encriptada
            'password' => bcrypt('cedec199'),

            'cedec' => true
        ]);

        DB::table('users')->insert([
            // Nome será 'admin'
            'name' => 'compdec',
            // ==
            'email' => 'compdec@compdec.com.br',
            
            // senha123 encriptada
            'password' => bcrypt('compdec'),

            'compdec' => true
        ]);
    }
}
