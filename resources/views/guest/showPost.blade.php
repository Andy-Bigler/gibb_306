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
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Author:</dt>
                        <dd>{{ $post->user->name }}</dd>
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

                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('comment.create', 'Kommentieren', array($post->id), array('class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 10px')) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('guest.post.index', '<< Alle Beiträge', [], ['class' => 'btn btn-default btn-block btn-h1-spacing', 'style' => 'margin-top: 10px']) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection