@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 animated fadeIn">
                <div class="panel panel-default col-md-12">

                    <h1 class="text-center"><i class="fas fa-pen-square"></i> <strong>Edit a Path</strong></h1>
                    <hr>

                    <form method="POST" action="/posts/{{ $post->id }}/edit">
                        <input type='text' name='user_id' value="{{ Auth::user()->id }}" hidden="true">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        
                        <div class="form-group col-md-4">

                            <label>Select Category:</label>
                                <select class="form-control" required="required" name="category">
                                    <option></option>

                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach

                                </select>
                        </div>

                        <div class="form-group col-md-8">
                            <label>Title:</label>
                            <input type="text-area"  class="form-control" name="title" required="required" value="{{ $post->title }}">
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Body:</label>
                            <textarea class="form-control" rows="20" name="body" required="required">{{ $post->body }}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" method="post">Submit</button>
                        </div

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

