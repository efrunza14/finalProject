@extends('layout.layout')

@section('content')
    <h1>Coșul de cumpărături</h1>

    @if (count($products) > 0)
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} - {{ $cart[$product->id] }} bucati</li>
            @endforeach
        </ul>
    @else
        <p>Coșul tău de cumpărături este gol.</p>
    @endif
@endsection
