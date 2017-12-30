@extends('layouts.master')

@section('content')
<div class="container">
        <div class="jumbotron">
                <div class="container">
                  <h1 class="display-3">Categories</h1>
                  <p>Getting started is as simple as choosing a path that interests you, or if you don't see anything that interests you, why not create your own path.</p>
                  <p><a class="btn btn-primary btn-lg" href="/create" role="button">Create Path &raquo;</a></p>
                </div>
        </div>
          
<div class="container row">
        
        <div class="panel col-sm-12"  style="background-color: #fff;">
                @foreach ($categories as $category)
                  <a class="hover"href="/categories/{{ $category->id }}">
                    <div class="col-sm-3">
                        
                        <h2>{{ $category->title }}</h2>
                        <p>{{ $category->description }}</p>

                    </div>
                    </a> 
                    @endforeach
              </div> <!-- /container -->
            </div>
</div>
@endsection 