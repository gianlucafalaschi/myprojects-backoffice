@extends('layouts.admin')

@section('content')
    <h1 class="fs-4 text-secondary my-4">All Technologies</h1>

    <p>Choose a technology to see all the projects that utilize it.</p>

    @foreach ($technologies as $technology)

    <div class="list-group shadow">
        <a href="{{route('admin.technologies.show', ['technology'=> $technology->slug]) }}" class="list-group-item list-group-item-action">{{$technology->name}}</a>
    </div>
    @endforeach

@endsection