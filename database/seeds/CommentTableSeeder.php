<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'body' => "It's a programming language",
            'post_id' => 2,
            'user_id' => 1
        ]);

        Comment::create([
            'body' => "You suck",
            'post_id' => 1,
            'user_id' => 2
        ]);
    }
}
