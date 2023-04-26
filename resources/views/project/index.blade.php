@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between p-5">
        <h1>
            Elenco Projects 
        </h1>
        <a href="{{route('projects.create')}}" class="btn btn-outline-primary">
            Aggiungi Projects
        </a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)

                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>
                        <a href="{{ route('projects.show', $project) }}">
                            {{$project->title}}
                        </a>
                    </td>
                    <td>{{$project->content}}</td>
                    <td>{{$project->slug}}</td>
                </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection