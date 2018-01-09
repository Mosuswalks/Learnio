@extends('layouts.master')

@section('content')
            <div class="jumbotron jumbotron-fluid text-center animated fadeInDown" id="categoryJumbo">
                <div class="container animated fadeInUp" id="categoryJumboContent">
                    <i class="{{ $category->icon }}"></i>
                    <h1>{{ $category->title }}</h1>
                    <p>{{ $category->description }}</p>
                <div class="form-group">
                    <form>
                        <div class="col-sm-2 col-sm-offset-5">
                        <select class="form-control">
                            <option>Latest</option>
                            <option>Most Liked</option>
                            <option>Most Comments</option>
                        </select>
                        <button class="btn btn-primary">Go</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="card-deck">
                @foreach ($postsForCategory as $post)
                <div class="col-sm-3 animated fadeInUp text-center" >
                    <div class="card col-sm-4" id="categoryCards">
                        
                        <div class="card-block">
                            <h2 class="card-title"><strong>{{ $post->title }}</strong></h3>
                            <hr>
                            <div>
                            <h4 class="card-text"> <i class="fas fa-user-circle"></i> {{ $post->user->name}} <h4>
                            <h4><i class="far fa-comments"></i> {{ $post->comments->count() }} 
                                &nbsp 
                            <i class="far fa-thumbs-up"></i></h4>    
                            </div>
                            <hr>
                            <!-- This page needs the inline css removed-->
                            <a href="/posts/{{$post->id}}" class="btn btn-primary" style="margin-bottom: 2rem;">Select</a>
                            <div class="card-footer">
                                    <small class="text-muted" style="color: #fff">Last updated {{ $post->updated_at->toFormattedDateString() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection