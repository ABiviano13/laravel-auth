@extends('layouts.app')

@section('content')
<div class="container">
    <h1>
        Elenco Projects 
    </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Slug</th>
            <th scope="col">Modifica</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)

                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->content}}</td>
                    <td>{{$project->slug}}</td>
                    <td>
                        <a class="btn btn-sm btn-secondary" href="{{ route('projects.edit',$project) }}">Edit</a>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection