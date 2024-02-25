@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Hello, World!</h1>
    <ul>
        @foreach ($types as $type)
            <li>{{$type}}</li>
        @endforeach
    </ul>
@endsection
