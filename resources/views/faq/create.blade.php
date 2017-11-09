@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Neuen Beitrag erstellen</h1>
                <hr>

                {!! Form::open(array('route' => 'faq.store')) !!}
                {{ Form::label('question', 'Frage:') }}
                {{ Form::textarea('question', null, array('class' => 'form-control')) }}
                {{ Form::label('answer', 'Antwort:', ['style' => 'margin-top: 30px']) }}
                {{ Form::textarea('answer', null, array('class' => 'form-control')) }}
                {{ Form::submit('FAQ erstellen', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 30px')) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection