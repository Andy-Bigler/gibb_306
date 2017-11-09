@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Welcome</h1>
                <br>
                <h2>Foren Beiträge</h2>
                <br>
                @foreach($posts as $post)
                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p class="bold">{{ $post->user->name }}</p>
                        <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                        <a href="{{ route('guest.post.show', $post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                    <hr>
                @endforeach
                <br>
                <h2>FAQ</h2>
                <br>
                @foreach($faqs as $faq)
                    <div class="post">
                        <h3>{{ $faq->question }}</h3>
                        <p class="bold">{{ $faq->user->name }}</p>
                        <p>{{ $faq->answer }}</p>
                    </div>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
@endsection