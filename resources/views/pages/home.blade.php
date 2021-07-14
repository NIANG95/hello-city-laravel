@extends('app')

@section('content')
    <img src="{{ asset('images/senegal.jpg') }}" alt="Senegal Flag" width="150" height="100">
    <h1>hello from Dakar !</h1>
    <p>It's currently {{ date('h:i A') }} </p>

@endsection
