<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function postIndex()
    {
        return view('guest.indexPost');
    }

    public function postShow()
    {
        return view('guest.showPost');
    }

    public function faqIndex()
    {
        return view('guest.indexFaq');
    }
}
