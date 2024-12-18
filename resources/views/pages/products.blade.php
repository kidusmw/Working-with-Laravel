@extends('layouts.app')

@section('content')
    @foreach ($products as $product)
        <li>
            {{ $product->name }}
        </li>
    @endforeach
@endsection