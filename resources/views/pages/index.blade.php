@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Hello, World!</h1>
    <ul>
        {{-- @foreach ($types as $type)
            <li>{{$type}}</li>
        @endforeach --}}
        @foreach ($projects as $project)
        <li>Title: {{$project->title}} - Company: {{$project->title}}</li>
        
         @endforeach

    </ul>
@endsection
