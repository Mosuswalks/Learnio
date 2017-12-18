@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="list-group">
        <div class="panel panel-default text-center ">
            <h1 class="">{{ $category->subject }}</h1>
                    <hr>
            <p>{{ $category->description}}</p>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-clickable">
        <h2>This is a test</h2> 
        </div>
    </div>
@endsection