@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">Our Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <x-products-list :name="$product['name']" :quantity="$product['quantity']" />
            </li>
        @endforeach
    </ul>
@endsection
