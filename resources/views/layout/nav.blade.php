<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
    data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1">
            </span>{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
<<<<<<< HEAD
                {{-- @guest --}}
=======
                @guest
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
<<<<<<< HEAD
                {{-- @endguest
                @auth() --}}
=======
                @endguest
                @auth()
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Explore</a>
                    </li>
                    <li class="nav-item">
<<<<<<< HEAD
                        {{-- <a class="nav-link" href="{{route('profile')}}">{{ Auth::user()->name }}</a> --}}
                        <a class="nav-link" href="{{route('profile')}}">Maria</a>
=======
                        <a class="nav-link" href="{{route('profile')}}">{{ Auth::user()->name }}</a>
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm"type="submit"> Logout </button>
                        </form>
                    </li>
<<<<<<< HEAD
                {{-- @endauth --}}
=======
                @endauth
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
            </ul>
        </div>
    </div>
</nav>
