@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Meine FAQs</h1>
            </div>
            <div class="col-md-3">
                <a href="{{ route('faq.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Neues FAQ</a>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Frage</th>
                    <th>Antwort</th>
                    <th>Created At</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <th>{{ $faq->id }}</th>
                            <td>{{ substr($faq->question, 0, 50) }}{{ strlen($faq->question) > 50 ? "..." : "" }}</td>
                            <td>{{ substr($faq->answer, 0, 50) }}{{ strlen($faq->answer) > 50 ? "..." : "" }}</td>
                            <td>{{ date( 'j M, Y', strtotime($faq->created_at)) }}</td>
                            <td><a href="{{ route('faq.show', $faq->id) }}" class="btn btn-default btn-sm btn-marg">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    {!! $faqs->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection