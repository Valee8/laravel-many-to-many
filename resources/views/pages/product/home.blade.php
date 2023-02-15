@extends('layouts.main-layout')

@section('content')

    <h1>
        Products
    </h1>

    <a href="{{ route('home') }}">Back</a>

    <ul>
        @foreach ($products as $product)
        <li>
            [{{ $product -> code }}] {{ $product -> name }}
            - {{ $product -> typology -> name }}
            - DIGITAL: 
            {{ $product -> typology -> digital ? "Yes" : "No" }}
            - <a href="{{ route('product.delete', $product) }}">Delete</a>
            - <a href="{{ route('product.edit', $product) }}">Edit</a>
        </li>
        @endforeach
    </ul>
    
@endsection