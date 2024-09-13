@extends('layouts.admin')

@section('content')
    <h1>All Technologies</h1>

    <p>Choose a technology to see all the projects that utilize it.</p>

    @foreach ($technologies as $technology)
    <ul>
        <li>
            <a href="{{route('admin.technologies.show', ['technology'=> $technology->slug]) }}" class="text-decoration-none">{{$technology->name}}</a>
        </li>
    </ul> 
    @endforeach
    
@endsection