@extends('layouts.master')

@section('content')
<div class="container">
        <div class="jumbotron animated fadeInDown">
                <div class="container">
                  <h1 class="display-3">Categories</h1>
                  <p>Getting started is as simple as choosing a path that interests you, or if you don't see anything that interests you, why not create your own path.</p>
                  <p><a class="btn btn-primary btn-lg" href="/create" role="button">Create Path &raquo;</a></p>
                </div>
        </div>
          
        <div class="card-deck"  style="background-color: #fff;">
                @foreach ($categories as $category)
                <div class="col-sm-3 animated fadeInUp">
                <div class="card col-sm-4" style="width: 25rem; height: 20rem; background-color: #fff; padding: 15px; margin-top: 15px;">

                    <div class="card-block">
                        <h2 class="card-title"><strong>{{ $category->title }}</strong></h2>
                        <p class="card-text">{{ $category->description }}</p>
                        <hr>
                        <a href="/categories/{{ $category->id }}" class="btn btn-primary" style="margin-bottom: 30px;">Select</a>
                    </div>
                        
                       
                </div>
                    @endforeach
        </div>
</div>

@endsection 