@extends('layouts.admin')

@section('content')
    <h1 class="fs-4 text-secondary my-4">{{ $technology->name}}</h1>

    <p class="mb-3 fs-4 text-secondary">Projects using this technology:</p>
    <p>Select a project to see all the details.</p>
    {{-- mostra tutti i progetti che hanno questa technology / projects e' la funzione nel model Technology --}}
    @foreach ($technology->projects as $project)   
    <div class="list-group shadow">
        <a href="{{route('admin.projects.show', ['project'=> $project->slug]) }}" class="list-group-item list-group-item-action">{{$project->name}}</a>
    </div>
    @endforeach
    
    <div class="mt-4">
        <a class="btn btn-primary " href="{{route('admin.technologies.index')}}">Go back</a>
    </div>

@endsection