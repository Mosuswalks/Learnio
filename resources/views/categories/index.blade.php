@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">   
        <div class="list-group col col-sm-3">
            <a class="list-group-item active text-center "><h1>Categories</h1></a>
                @foreach ($categories as $category)
                    <a href="/categories/{{ $category->id }}" class="list-group-item list-group-item-action"><h3> {{ $category->subject }}</h3><h6>{{ $category->description }}</h6></a>
                @endforeach
        </div>
        <div class="col col-sm-9">
            <a class="list-group-item">This is a test</a>
        </div>
    </div>
    
</div>

@endsection