@extends('layouts.admin')

@section('content')
<h1>Create a new project</h1>   

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- per caricare un'immagine aggiungiamo l'attributo enctype al form --}}
<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    
    <div class="mb-3">
      <label for="client_name" class="form-label">Client name</label>
      <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name') }}">
    </div>

    <div class="mb-3">
      <label for="cover_image" class="form-label">Image</label>
      <input class="form-control" type="file" id="cover_image" name="cover_image">
    </div>

    <div class="mb-3">
      <label for="type_id" class="form-label">Type</label>
      <select class="form-select" id="type_id" name="type_id">
        <option value="">Open this select menu</option>
        @foreach ($types as $type)
          <option @selected($type->id == old('type_id')) value="{{ $type->id}}">{{$type->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <h5>Technologies</h5>
      @foreach ($technologies as $technology)
      <div class="form-check">          {{-- funzione old --}}                                                                             {{-- metto i valori del name dentro un array[], altrimente il form invia solo l'ultima checkbox selezionata --}}
        <input class="form-check-input" @checked(in_array($technology->id, old('technologies', []))) name="technologies[]" type="checkbox" value="{{ $technology->id }}" id="technology-{{ $technology->id }}">
        <label class="form-check-label" for="technology-{{ $technology->id }}">
          {{ $technology->name }}
        </label>
      </div>
      @endforeach
    </div>

    <div class="mb-3">
        <label for="summary" class="form-label">Summary</label>
        <textarea class="form-control" id="summary" name="summary" rows="8">{{ old('summary') }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection