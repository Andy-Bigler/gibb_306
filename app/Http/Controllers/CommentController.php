<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Comment;
use App\Post;
use Auth;
use Gate;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $post = Post::find($id);

        return view('comment.create')->withPost($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, array(
            'body' => 'required'
        ));

        $comment = new Comment;

        $comment->body = $request->body;
        $comment->post_id = $id;
        $comment->user_id = Auth::user()->id;

        $comment->save();

        Session::flash('success', 'Kommentar wurde gespeichert!');

        return redirect()->route('post.show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $post_id)
    {
        $comment = Comment::find($id);
        $post = Post::find($post_id);

        return view('comment.edit')->withComment($comment)->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $post_id)
    {
        $this->validate($request, array(
            'body' => 'required'
        ));

        $comment = Comment::find($id);

        if (Gate::denies('edit-comment', $comment)) {
            return redirect()->route('post.show', $post_id);
        }

        $comment->body = $request->body;

        $comment->save();

        Session::flash('success', 'Kommentar wurde aktualisiert!');

        return redirect()->route('post.show', $post_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $post_id)
    {
        $comment = Comment::find($id);

        if (Gate::denies('delete-comment', $comment)) {
            return redirect()->route('post.show', $post_id);
        }

        $comment->delete();

        Session::flash('success', 'Kommentar wurde gelöscht.');

        return redirect()->route('post.show', $post_id);
    }
}
