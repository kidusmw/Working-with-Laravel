@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">Our Products</h1>    
    <ul>
        <li>
            @foreach ($orders as $order)
                </x-item-list 
                    :name="$order['order_item']" 
                    :quantity="$order['order_qty']" 
                >
            @endforeach
        </li>
    </ul>
@endsection