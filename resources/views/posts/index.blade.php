
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="list-group">

        @foreach ($posts as $post)
                <div class="list-group-item"><a href="posts/{{ $post->id }}">
                <h1>{{ $post->title }}</h1></a>
                </div>
        @endforeach

    </div>
</div>

@endsection