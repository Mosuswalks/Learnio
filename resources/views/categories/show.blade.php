@extends('layouts.master')

@section('content')
    <div class="container">
            <div class="panel panel-default text-center animated fadeInDown" >
                <h1 class="">{{ $category->title }}</h1>
                <p>{{ $category->description}}</p>
                <hr>
            </div>
            <div class="card-deck">
            @foreach ($postsForCategory as $post)
            <div class="col-sm-3 animated fadeInUp text-center">
                <div class="card col-sm-4" style="width: 25rem ;border-radius: 8px; background-color: #616161; color: #fff; margin-top: 15px">
                    
                    <div class="card-block">
                        <h2 class="card-title"><strong>{{ $post->title }}</strong></h3>
                        <p class="card-text">{{ $post->description }} </p>
                        <hr>
                        <h4 class="card-text"> <i class="fas fa-user-circle"></i> {{ $post->user->name}} &nbsp <i class="far fa-comments"></i> {{ $post->comments->count() }}</h5>
                        <hr>
                        <!-- This page needs the inline css removed-->
                        <a href="/posts/{{$post->id}}" class="btn btn-primary" style="margin-bottom: 2rem;">Select</a>
                        <div class="card-footer">
                                <small class="text-muted" style="color: #fff">Last updated {{ $post->updated_at->toFormattedDateString() }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
    </div>
@endsection