@extends('layouts.master')

@section('content')
    <div class="container">
    
    <div class="list-group col-sm-12">
        <div class="panel panel-default text-center ">
            <h1 class="">{{ $category->title }}</h1>
                    <hr>
            <p>{{ $category->description}}</p>
        </div>
        @foreach ($postsForCategory as $post)
            <div class="panel col-sm-3">
                <a href="/posts/{{$post->id}}"><h2>{{$post->title}}</h2></a>
            </div>
        @endforeach
        </div>
    </div>
@endsection