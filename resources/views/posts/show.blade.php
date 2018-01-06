@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel col-md-10 col-md-offset-1 animated fadeIn">

            <div class="panel-title">
                
                <h1 class="text-center">{{ $post->title }}</h1>
                <h3 class="text-center"> <i class="fas fa-user-circle"></i> {{ $post->user->name }}</h3>
                <h4 class="text-center"><i class="far fa-calendar-alt"></i> {{ $post->created_at->toFormattedDateString() }}</h4>

            </div>

                <hr>

            <div class="panel-body">

                <p>{!! nl2br(e($post->body)) !!}</p>
                
            </div>

            <div class="text-center" id="vote">

                <!--Will only display the edit and delete button if the current authenticated user is the same user who posted it.
                    A gate is also used on the controller to ensure that even if the id's are changed in browser it will not allow editing. -->
                @if(Auth::id() == $post->user_id)
                    <form method="POST" action="/posts/{{ $post->id }}/delete">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" method="post">Delete</button>

                    </form>

                @endif

                <strong><h2>Did you find this helpful?</h2></strong>

                <div>

                <form method="POST" action="/posts/{{ $post->id }}/vote">

                        <a class="btn" value="1"><i class="fas fa-caret-up fa-3x"></i></a>

                        <span class="label label-primary" style="font-size: 25px;">{{ $votes }}</span>

                        <a class="btn" value="-1"><i class="fas fa-caret-down fa-3x"></i></a>
                </form>
            </div>
                    
            </div>

            <hr>

            <div class="comments">
                <ul class="list-group">
                    <h3>Comments</h3> 
                    @foreach($post->comments->sortByDesc('created_at') as $comment)
                        <li class="list-group-item">
                            <strong>
                                {{ $comment->created_at->diffForHumans() }}
                                &nbsp- 
                                {{  $comment->user->name }}:
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