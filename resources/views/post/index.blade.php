@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Alle Beiträge</h1>
            </div>
            <div class="col-md-3">
                <a href="{{ route('post.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Neuer Beitrag</a>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ date( 'j M, Y', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ route('post.show', $post->id) }}" class="btn btn-default btn-sm btn-marg">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection