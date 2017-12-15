@extends('layouts.app')

@section('content')
<div class="panel" style="width: 300px; height: 500px;}">
    <ul>
        
        @foreach ($categories as $category)

            <li>
            
            <a>{{ $category->subject }}</a>
            
            </li>

        @endforeach
    </ul>
</div>

@endsection