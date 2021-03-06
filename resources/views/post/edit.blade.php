@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) !!}
            <div class="col-md-8">
                {{ Form::label('title', 'Titel:') }}
                {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
                {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
                {{ Form::text('slug', null, ['class' => 'form-control']) }}
                {{ Form::label('body', 'Frage:', ['class' => 'form-spacing-top']) }}
                {{ Form::textarea('body', null, ['class' => 'form-control form-spacing-bottom']) }}
            </div>

            <div class="col-md-4">
                <div class="well">
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
                        <div class="col-sm-6">
                            {!! Html::linkRoute('post.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 10px')) !!}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::submit('Save Changes', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 10px']) }}
                        </div>
                    </div>

                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection