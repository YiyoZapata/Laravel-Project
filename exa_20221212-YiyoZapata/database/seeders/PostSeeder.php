<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;
use App\Models\Comment;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(3)->for(Community::factory())->has(Comment::factory(2))->count(2)->create();
    }
}
