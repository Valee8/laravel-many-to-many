@extends('layouts.main-layout')

@section('content')

    <h1>
        Products
    </h1>

    <ul>
        @foreach ($products as $product)
        <li>
            [{{ $product -> code }}] {{ $product -> name }}
            - {{ $product -> typology -> name }}
            - DIGITAL: 
            {{ $product -> typology -> digital ? "Yes" : "No" }}
        </li>
        @endforeach
    </ul>
    
@endsection