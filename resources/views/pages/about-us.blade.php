@extends('app')

@section('title', '  About Us | '.config('app.name'))

@section('content')
    <img src="{{ asset('images/info-logo.png') }}" alt="Info Logo" width="150" height="100">
    <p>Built with &hearts; by Mame Sandeck NIANG</p>
    <p><a href="{{ route('home') }}"><button class="btn info">Retour à la page d'accueil</button></a></p>
@endsection
        
      
