@extends('layout.layout')

@section('content')
    <div class="row">
        @include('shared.left-sidebar')
        <div class="col-6">
            @include('shared.success-message')
            @include('shared.submit-review')
            <hr>
            @foreach ($reviews as $review)
                <div class="mt-3">
                    @include('shared.review-card')
                </div>
            @endforeach
            {{ $reviews->links() }}
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
