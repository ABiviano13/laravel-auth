@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$project->title}}</h1>
        <p>{{$project->slug}}</p>

        <p>
            {{$project->content}}
        </p>
    </div>
@endsection