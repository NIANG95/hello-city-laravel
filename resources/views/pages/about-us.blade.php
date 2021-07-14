@extends('app')

@section('title', '  About Us | '.config('app.name'))

@section('content')
    <p>Built with &hearts; by Mame Sandeck NIANG</p>
    <p><a href="{{ route('home') }}"><button class="btn info">Retour à la page d'accueil</button></a></p>
@endsection
        
      
