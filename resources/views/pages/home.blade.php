@extends('layouts.main-layout')

@section('content')

    <h1>
        Categories
    </h1>

    @foreach ($categories as $category)
        <h2>{{ $category -> name }}</h2>
        
        <ul>
            @foreach ($category -> products as $product)
                <li>
                    [{{ $product -> code }}] {{ $product -> name }}
                    - {{ $product -> typology -> name }}
                    - DIGITAL: 
                    {{ $product -> typology -> digital ? "Yes" : "No" }}
                </li>
            @endforeach
        </ul>
    @endforeach
    
@endsection