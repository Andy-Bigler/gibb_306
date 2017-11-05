<?php

use Illuminate\Database\Seeder;
use App\Faq;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
           'question' => 'How to create server?',
           'answer' => 'Click on the icon in the top left',
            'user_id' => 1
        ]);
    }
}
