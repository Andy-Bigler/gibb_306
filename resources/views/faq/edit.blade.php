@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::model($faq, ['route' => ['faq.update', $faq->id], 'method' => 'PUT']) !!}
            <div class="col-md-8">
                {{ Form::label('question', 'Frage:') }}
                {{ Form::textarea('question', null, ['class' => 'form-control']) }}
                {{ Form::label('answer', 'Antwort:', ['class' => 'form-spacing-top']) }}
                {{ Form::textarea('answer', null, ['class' => 'form-control']) }}
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date( 'j M, Y H:i', strtotime($faq->created_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ date( 'j M, Y H:i', strtotime($faq->updated_at)) }}</dd>
                    </dl>
                    <hr>

                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('faq.show', 'Cancel', array($faq->id), array('class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 10px')) !!}
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