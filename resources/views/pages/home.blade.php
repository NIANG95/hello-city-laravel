@extends('app')

@section('content') 

    <img src="{{ asset('images/senegal.jpg') }}" alt="Senegal Flag" width="200" height="100" class=" mt-12 rounded shadow-md h-32 ">

    <h1 class="mt-5  text-3xl sm:text-5xl font-semibold text-indigo-600">hello from Dakar !</h1>

    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }} </p>

@endsection
