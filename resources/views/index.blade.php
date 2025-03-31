@extends('layouts.master')

@section('title', 'Movies')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        @foreach ($movies as $movie)
            <x-movie-card :movie="$movie" />
        @endforeach
    </div>
@endsection
