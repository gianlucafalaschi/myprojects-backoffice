@extends('layouts.admin')

@section('content')
    <h1>{{ $technology->name}}</h1>

    <h5 class="mb-3">Projects using this technology:</h5>
    <p>Select a project to see all the details.</p>
    {{-- mostra tutti i progetti che hanno questa technology / projects e' la funzione nel model Technology --}}
    @foreach ($technology->projects as $project)
    <ul>
        <li>
            <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" > {{$project->name}} </a>
        </li>
    </ul>    
    @endforeach
    
    <div class="mt-4">
        <a class="btn btn-primary " href="{{route('admin.technologies.index')}}">Go back</a>
    </div>

@endsection