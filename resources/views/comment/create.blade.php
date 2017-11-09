@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p class="lead">{{ $post->body }}</p>

                <br>
                <hr>
                <h2>Kommentare:</h2>

                @foreach($post->comments as $comment)
                    <div class="post">
                        <h5>{{ $comment->user->name }}</h5>
                        <h6>{{ date( 'j M, Y H:i', strtotime($comment->created_at)) }}</h6>
                        <p>{{ $comment->body }}</p>
                    </div>
                    <br>
                @endforeach

                <hr>
                <h2>Kommentar schreiben:</h2>

                {!! Form::open(['route' => ['comment.store', $post->id], 'method' => 'POST']) !!}
                {{ Form::label('body', 'Kommentar:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                {{ Form::submit('Kommentar erstellen', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 30px')) }}
                {!! Form::close() !!}
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Author:</dt>
                        <dd>{{ $post->user->name }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Url Slug:</dt>
                        <dd><a href="{{ route('guest.post.show', $post->slug) }}">{{ $post->slug }}</a></dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date( 'j M, Y H:i', strtotime($post->created_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ date( 'j M, Y H:i', strtotime($post->updated_at)) }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection