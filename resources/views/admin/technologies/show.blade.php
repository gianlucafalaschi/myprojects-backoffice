@extends('layouts.admin')

@section('content')
    <h1>{{ $technology->name}}</h1>

    <h5 class="mb-3">Projects using this technology:</h5>
    {{-- mostra tutti i progetti che hanno questa technology / projects e' la funzione nel model Technology --}}
    @foreach ($technology->projects as $project)
    <ul>
        <li>
            {{$project->name}}
        </li>
    </ul>    
    @endforeach
    
    <div class="mt-4">
        <a class="btn btn-primary " href="{{route('admin.technologies.index')}}">Go back</a>
    </div>

@endsection