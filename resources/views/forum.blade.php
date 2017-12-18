@extends('layouts.app')

@section('content')
<div class="panel" style="width: 300px; height: 500px;}">

        @foreach ($categories as $category)

           <li style="list-style: none; padding-bottom: 10px" class="col-sm-12"> <button class="btn btn-primary">{{ $category->subject }}</button></li>

        @endforeach

</div>

@endsection