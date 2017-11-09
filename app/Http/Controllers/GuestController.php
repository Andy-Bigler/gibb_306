<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Faq;

class GuestController extends Controller
{
    public function postIndex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('guest.indexPost')->withPosts($posts);
    }

    public function postShow($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('guest.showPost')->withPost($post);
    }

    public function faqIndex()
    {
        $faq = Faq::orderBy('id', 'desc')->paginate(10);

        return view('guest.indexFaq')->withFaqs($faq);
    }

    public function welcome()
    {
        $posts = Post::orderBy('id', 'desc')->limit(3)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(3)->get();

        return view('guest.welcome')->withPosts($posts)->withFaqs($faqs);
    }
}
