@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Eccomiiiiii sono pages.projects.index!</h1>
    <ul>
        @foreach ($projects as $project)
        <li>Project Title: {{$project->title}} - Company: {{$project->title}}</li>

        @foreach ($technologies as $technology)
            <li>{{$project->technology}}</li>
            <li>Technology: {{$technology->name}} - Details: {{$technology->description}}</li>
        @endforeach
        
        @endforeach

    </ul>
@endsection