@extends('layouts.master')

@section('content')
    <div class="container">
            <div class="panel panel-default text-center animated fadeInDown ">
                <h1 class="">{{ $category->title }}</h1>
                <p>{{ $category->description}}</p>
                <hr>
            </div>
            <div class="card-deck">
            @foreach ($postsForCategory as $post)
            <div class="col-sm-3 animated fadeInUp">
                <div class="card col-sm-4" style="width: 25rem; height: 30rem; background-color: #fff; padding: 15px; margin-top: 15px;">
                    
                    <div class="card-block">
                        <h3 class="card-title"><strong>{{ $post->title }}</strong></h3>
                        <p class="card-text">{{ $post->description}}</p>
                        <p class="card-text"> <i class="fas fa-user-circle"></i> {{ $post->user->name}}</p>
                        <hr>
                        <!-- This page needs the inline css removed -->
                        <a href="/posts/{{$post->id}}" class="btn btn-primary" style="margin-bottom: 30px;">Select</a>
                        <div class="card-footer">
                                <small class="text-muted">Last updated {{ $post->updated_at->toFormattedDateString() }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
    </div>
@endsection