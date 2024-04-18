@extends('layout.layout')

@section('content')
    <div class="row">
        @include('shared.left-sidebar')

        <!-- Col-6 -->
        <div class="col-6">
            <!-- Afișarea produselor -->
            <h4>Produse</h4>
<<<<<<< HEAD

            {{-- @include('select_tags') --}}

=======
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">{{ $product->price }} Lei</p>
                                <form action="{{ route('add_to_cart') }}" method="POST">
                                    @csrf
                                    <!-- Alte câmpuri ale formularului -->
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-primary">Adaugă în coș</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $products->links() }}
            </div>
        </div>

        <!-- Col-3 -->
        <div class="col-3">
            @include('shared.search-product')
        </div>
<<<<<<< HEAD

=======
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
    </div>
@endsection
