@extends('layouts.master')

@section('content')
<div class="container"> 
        <div class="list-group col-sm-6 mx-auto">
            <h1 class="text-center list-group-item">Categories</h1>
                @foreach ($categories as $category)
                    <a class="col-sm-3 list-group-item" href="/categories/{{ $category->id }}" class="list-group-item list-group-item-action"><h3> {{ $category->title }}</h3><h6>{{ $category->description }}</h6></a>
                @endforeach
        </div>
</div>

@endsection 