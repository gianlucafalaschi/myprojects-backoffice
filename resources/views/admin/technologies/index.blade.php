@extends('layouts.admin')

@section('content')
    <h1>All Technologies</h1>

    <p>Choose a technology to see all the projects that utilize it.</p>

    @foreach ($technologies as $technology)
    <ul>
        <li>
            <a href="{{route('admin.technologies.show', ['technology'=> $technology->slug]) }}" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">{{$technology->name}}</a>
        </li>
    </ul> 
    @endforeach
    
@endsection