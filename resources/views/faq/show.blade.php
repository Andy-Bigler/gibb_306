@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $faq->question }}</h1>
                <p class="lead">{{ $faq->answer }}</p>
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Author:</dt>
                        <dd>{{ $faq->user->name }}</dd>
                    </dl>

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
                            {!! Html::linkRoute('faq.edit', 'Edit', array($faq->id), array('class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 10px')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['faq.destroy', $faq->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 10px']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Html::linkRoute('faq.index', '<< Alle FAQs', [], ['class' => 'btn btn-default btn-block btn-h1-spacing', 'style' => 'margin-top: 10px']) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection