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
           'title' => 'How to undo the last commits in Git?',
           'body' => 'I committed by accident the wrong files into Git, but I haven\'t pushed the commit to the server yet. How can I undo those commits?',
            'slug' => 'HowtoundothelastcommitsinGit',
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'How to redirect to another webpage?',
            'body' => 'How can I redirect the user from one page to another using jQuery or pure JavaScript?',
            'slug' => 'Howtoredirecttoanotherwebpage',
            'user_id' => 5
        ]);
    }
}
