
@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-hover">
        <thead>
            <td></td>
        </thead>
        @foreach ($threads as $thread)
            <tr>
                <td>
                    <div class="panel">
                    <h1 class="panel-title">{{ $thread->title }}</h1>
                    <p class="panel-body">{{ $thread->body }}</p>
                </td>
            <tr>
        @endforeach
    </table>
</div>

@endsection