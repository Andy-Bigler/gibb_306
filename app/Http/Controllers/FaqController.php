<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use Auth;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::orderBy('id', 'desc')->paginate(10);

        return view('faq.index')->withFaqs($faqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'question' => 'required',
            'answer' => 'required'
        ));

        $faq = new Faq;

        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->user_id = Auth::user()->id;

        $faq->save();

        Session::flash('success', 'Faq wurde gespeichert!');

        return redirect()->route('faq.show', $faq->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faq.show')->withPost($faq);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'question' => 'required',
            'answer' => 'required'
        ));

        $faq = Faq::find($id);

        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->save();

        Session::flash('success', 'Faq wurde aktualisiert!');

        return redirect()->route('faq.show', $faq->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        Session::flash('success', 'Faq wurde gelöscht.');

        return redirect()->route('faq.index');
    }

    public function user()
    {
        $userId = Auth::user()->id;
        $faqs = Faq::where('user_id', $userId)->orderBy('id', 'desc')->paginate(10);

        return view('faq.user')->withFaqs($faqs);
    }
}
