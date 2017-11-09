@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>FAQ Guest</h1>
                <br>
                @foreach($faqs as $faq)
                    <div class="post">
                        <h3>{{ $faq->question }}</h3>
                        <p class="bold">{{ $faq->user->name }}</p>
                        <p>{{ $faq->answer }}</p>
                    </div>
                    <hr>
                @endforeach

                <div class="text-center">
                    {!! $faqs->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection