@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="card overflow-hidden">
                <div class="card-body pt-3">
                    <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Explore</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Feed</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/terms">
                                <span>Terms</span></a>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center py-2">
                    <a class="btn btn-link btn-sm" href="/profile">View Profile </a>
                </div>
            </div>
        </div>
        <div class="col-6">
            @include('shared.success-message')
                <div class="mt-3">
                    @include('shared.review-card')
                </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
