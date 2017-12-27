@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-title">
            <h1>{{ $thread->title }}</h1>
                    <hr>
            <p>{{ $thread->body}}
        </div>
    </div>
@endsection