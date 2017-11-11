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

        Post::create([
            'title' => 'Which equals operator (== vs ===) should be used in JavaScript comparisons?',
            'body' => 'I\'m using JSLint to go through JavaScript, and it\'s returning many suggestions to replace == (two equals signs) with === (three equals signs) when doing things like comparing idSele_UNVEHtype.value.length == 0 inside of an if statement. Is there a performance benefit to replacing == with ===? Any performance improvement would be welcomed as many comparison operators exist. If no type conversion takes place, would there be a performance gain over ==?',
            'slug' => 'WhichequalsoperatorshouldbeusedinJavaScriptcomparisons',
            'user_id' => 1
        ]);
    }
}
