<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
           'title' => 'Always getting 404 Error',
           'body' => 'How to fix this',
            'slug' => '404error_05112017',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'What is C#',
            'body' => 'I found this in an online post and am interessted what it is',
            'slug' => 'whatiscsharp_05112017',
            'user_id' => 2
        ]);
    }
}
