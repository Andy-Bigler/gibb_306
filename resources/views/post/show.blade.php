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
                        @if(Auth::user()->id == $comment->user_id)
                        <div class="row">
                            <div class="col-sm-2 col-xs-4">
                                {!! Html::linkRoute('comment.edit', 'Edit', array($comment->id, $post->id), array('class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 10px')) !!}
                            </div>
                            <div class="col-sm-2 col-xs-4">
                                {!! Form::open(['route' => ['comment.destroy', $comment->id, $post->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 10px']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        @endif
                    </div>
                    <br>
                @endforeach
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
                    <hr>

                    @if(Auth::user()->id == $post->user_id)
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('post.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 10px')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::open(['route' => ['post.destroy', $post->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 10px']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('comment.create', 'Kommentieren', array($post->id), array('class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 10px')) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('post.index', '<< Alle Beiträge', [], ['class' => 'btn btn-default btn-block btn-h1-spacing', 'style' => 'margin-top: 10px']) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection