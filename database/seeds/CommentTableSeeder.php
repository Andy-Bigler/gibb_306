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
            'body' => "Warning: you should only do this if you have not yet pushed the commit to a remote, otherwise you will mess up the history of others who have already pulled the commit from the remote!",
            'post_id' => 1,
            'user_id' => 1
        ]);

        Comment::create([
            'body' => "Here's a very clear and thorough post about undoing things in git, straight from Github.",
            'post_id' => 1,
            'user_id' => 3
        ]);

        Comment::create([
            'body' => "This is a great resource straight from Github: How to undo (almost) anything with Git",
            'post_id' => 1,
            'user_id' => 4
        ]);

        Comment::create([
            'body' => "See this guide for Git commits undo on Local, Public and Git Branch How to undo Git Commits like pro",
            'post_id' => 1,
            'user_id' => 5
        ]);


        Comment::create([
            'body' => "I keep seeing both window.location = url; and window.location.href = url; How are they different? Are they? BTW, I didn't know about window.location.replace(url). Nice.",
            'post_id' => 2,
            'user_id' => 3
        ]);

        Comment::create([
            'body' => "window.location is the same as window.location.href, in terms of behavior. window.location returns an object. If .href is not set, window.location defaults to change the parameter .href. Conclude: Use either one is fine.",
            'post_id' => 2,
            'user_id' => 1
        ]);

        Comment::create([
            'body' => "var url = \"website name\" $(location).attr('href',url);",
            'post_id' => 2,
            'user_id' => 4
        ]);

        Comment::create([
            'body' => "That is a backwards way to do it. The location object is not a an HTML element and using the jquery object to set it just seems wrong. Why would you use that when the straight JS code is so simple?",
            'post_id' => 2,
            'user_id' => 2
        ]);


        Comment::create([
            'body' => "The identity (===) operator behaves identically to the equality (==) operator except no type conversion is done, and the types must be the same to be considered equal. Reference: Javascript Tutorial: Comparison Operators. The == operator will compare for equality after doing any necessary type conversions. The === operator will not do the conversion, so if two values are not the same type === will simply return false. Both are equally quick.",
            'post_id' => 3,
            'user_id' => 5
        ]);

        Comment::create([
            'body' => "Just in case anyone was wondering in 2012: === is way faster than ==",
            'post_id' => 3,
            'user_id' => 2
        ]);
    }
}
