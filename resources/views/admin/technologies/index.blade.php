@extends('layouts.admin')

@section('content')
    <h1>All Technologies</h1>

    @foreach ($technologies as $technology)
    <ul>
        <li>
            <a href="{{route('admin.technologies.show', ['technology'=> $technology->slug]) }}">{{$technology->name}}</a>
        </li>
    </ul> 
    @endforeach
    
@endsection