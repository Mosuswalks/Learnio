@extends('layouts.master')

@section('content')
    <div class="container">
    
    <div class="list-group">
        <div class="panel panel-default text-center ">
            <h1 class="">{{ $category->title }}</h1>
            <p>{{ $category->description}}</p>
            <hr>
        @foreach ($postsForCategory as $post)
            <div class="">
                <a href="/posts/{{$post->id}}"><h2>{{$post->title}}</h2><h4></a>
            </div>
        @endforeach
    </div>
    </div>
@endsection