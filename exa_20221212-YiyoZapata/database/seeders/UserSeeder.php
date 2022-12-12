<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*5  usuarios con un perfil asociado (1:1)*/ 
        User::factory(5)
        ->has(Profile::factory())
        ->create();

         // 5 usuarios sin perfil asociado
         User::factory(5)->create();
    }
}
