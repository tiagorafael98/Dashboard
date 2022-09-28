@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

     <h1>Carros</h1>
     @if($procurar != '')
     <p>O utilizador está à procura de: {{$procurar}}</p>
     @endif

@endsection
        