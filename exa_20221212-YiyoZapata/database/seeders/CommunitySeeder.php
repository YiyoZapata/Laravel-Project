<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;
use App\Models\User;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //3 comunidades con un user vinculado cada uno
        
        foreach(User::factory(3)->create() as $user) {
            Community::factory()->for($user)->create();
          }
    }
}
