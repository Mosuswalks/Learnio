@extends('layouts.master')

@section('content')
<div class="container">
        <div class="jumbotron animated fadeInDown" id="catJumbo">
                <div class="container">
                  <h1 class="display-3">Categories</h1>
                  <p>Getting started is as simple as choosing a path that interests you, or if you don't see anything that interests you, why not create your own path.</p>
                  <p><a class="btn btn-primary btn-lg" href="/create" role="button">Create Path &raquo;</a></p>
                </div>
        </div>
          
        <div class="card-deck">

                @foreach ($categories as $category)

                <div class="col-sm-3 animated fadeInUp text-center">
                    <div class="card">
                    
                        <div class="card-block" id="catCards">
                            <i class="{{$category->icon}}"></i>
                            <h2 class="card-title"><strong> {{ $category->title }}</strong></h2>
                            <p class="card-text">{{ $category->description }}</p>
                            <hr>
                            <a href="/categories/{{ $category->id }}" class="btn btn-primary">Select</a>
                        </div>
                    
                        
                    </div>
                </div>

                @endforeach
        </div>
</div>

@endsection 