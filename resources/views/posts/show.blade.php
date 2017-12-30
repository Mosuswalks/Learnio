@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel col-md-10 col-md-offset-1">

            <div class="panel-title">
                
            <h1 class="text-center">{{ $post->title }}</h1>
            <h3 class="text-center"> <i class="fas fa-user-circle"></i> {{ $user->name }}</h3>
            <h4 class="text-center"><i class="far fa-calendar-alt"></i> {{ $post->created_at->toFormattedDateString() }}</h4>
            </div>
            <hr>
            <div class="panel-body">

                <p class=''>{{$post->body}}</p>
                
            </div>
            <hr>
            <div class="comments">
                <ul class="list-group">
                    <h3>Comments</h3>
                    @foreach($post->comments->sortByDesc('created_at') as $comment)
                        <li class="list-group-item">
                            <strong>
                                {{ $comment->created_at->diffForHumans() }}
                            </strong>
                            &nbsp
                                {{ $comment->body }}

                        </li>
                    @endforeach
            </div>

            <hr>

            <div class="card">
                <div class="card-block col-sm-6 col-sm-offset-3">

                    <form method="POST" action="/posts/{{ $post->id }}/comments">

                        {{ csrf_field() }}

                        <div class="form-group">
                            
                            <textarea class="form-control" name="body" placeholder="Your comment here." required="required"></textarea>

                        </div>

                            
                        <div class="form-group text-center">
                         
                            <button class="btn btn-primary" method="post">Add Comment</button>

                        </div
    

                    </form>

                    @include('layouts.errors')

                </div>

            </div>
        </div>
    </div>
@endsection