@extends('layout.layout')

@section('content')
    <div class="container">
        <h2>Search Results</h2>
<<<<<<< HEAD
        @if ($products->isEmpty())
=======
        @if($products->isEmpty())
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
            <p>No products found.</p>
        @else
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">{{ $product->price }} Lei</p>
                                <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
