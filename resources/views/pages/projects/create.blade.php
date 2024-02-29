@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <h1>Ciao sono la create</h1>

    <form action="Qui ci va la route" method="POST">
        @csrf
        @method('POST')

        <label for="title"></label>
        <input type="text" name="title" id="title" placeholder="Inserisci il nome del tuo nuovo progetto">

        <label for="company"></label>
        <input type="text" name="company" id="company" placeholder="Inserisci il nome dell'azienda">

        <input type="submit" value="CREATE">
    </form>

    
@endsection