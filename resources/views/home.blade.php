@extends('layouts.base')
@section('title', 'home')

@section('content')

<h1>Elenco dei Film</h1>

    <ul>
        @foreach ( $movies as $movie )

        <li class="films">
            {{$movie->id}} - {{$movie->title}} - {{$movie->original_title}} - {{$movie->nationality}} - {{$movie->date}} - {{$movie->vote}}
        </li>
            
        @endforeach
    </ul>


@endsection
