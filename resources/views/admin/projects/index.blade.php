@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            
            <h1>
                Progetti
            </h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success my-2">
                Aggiungi progetto
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            @foreach ($projects as $project)  
            <tbody>
              <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->slug }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Dettagli</a>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Aggiorna</a>
                    <a href="{{ route('admin.projects.destroy', $project->id) }}" class="btn btn-danger">Elimina</a>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </div>
</div>
@endsection