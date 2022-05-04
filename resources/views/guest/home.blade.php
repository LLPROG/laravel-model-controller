@extends('guest.template.base')

@section('title', 'laravel')

@section('content')
    <div class="cards-cont">
        @foreach ($data as $movie)
        <div class="card">
            <h1>
                {{ $movie->title }}
            </h1>
            <h3>
                {{ $movie->nationality }}
            </h3>
            <h5>
                {{ $movie->date }}
            </h5>
        </div>
        @endforeach
    </div>
@endsection
