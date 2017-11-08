@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Neuen Beitrag erstellen</h1>
                <hr>

                {!! Form::open(array('route' => 'post.store')) !!}
                {{ Form::label('title', 'Titel:') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}
                {{ Form::label('slug', 'Slug:', ['style' => 'margin-top: 30px']) }}
                {{ Form::text('slug', null, array('class' => 'form-control')) }}
                {{ Form::label('body', 'Frage:', ['style' => 'margin-top: 30px']) }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                {{ Form::submit('Beitrag erstellen', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 30px')) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection