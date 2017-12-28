@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel panel-title">
        @foreach ($posts as $post)
                    <a class="col-sm-3 list-group-item" href="/categories/{{ $category->title }}" class="list-group-item list-group-item-action"><h3> {{ $post->title }}</h3><h6>{{ $post->description }}</h6></a>
                @endforeach
        </div>
    </div>
@endsection