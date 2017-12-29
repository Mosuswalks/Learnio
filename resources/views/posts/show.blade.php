@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel col-md-10 col-md-offset-1">
            <div class="panel-title">
            <h1 class="text-center">{{ $post->title }}</h1>
            <h4 class="text-center">By: {{ $user->name }}</h5>
            <h4 class="text-center">Posted on: {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</h5>
            </div>
            <hr>
            <div class="panel-body">

                <p class=''>{{$post->body}}</p>

            </div>
        </div>
    </div>
@endsection