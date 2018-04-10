<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {
        User::create([
            'cpf' => '49529070827',
            'name' => 'Vitor',
            'phone' => '3512341234',
            'birth' => '19801001', 
            'gender' => 'm', 
            'email' => 'vitor@superaremedia.com.br', 
            'password' => env('PASSWORD_HASH') ? bcrypt('senha') : 'senha', 
            ]);
        
    }
}
