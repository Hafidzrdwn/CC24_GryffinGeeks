<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom text-uppercase">
<div class="container">
  <a class="navbar-brand" href="#">
    <img src="{{ asset('images/logo.png') }}" style="width:38px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mt-2 mt-lg-0 mt-xl-0" id="navbarNav">
    <ul class="navbar-nav ml-lg-5">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-lg-4" href="#">Products</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-shopping-cart" style="font-size: 20px; margin-top: 10px; color:#00215E;"></i>
        </a>
      </li>
      @auth
      <div class="dropdown mt-3 ml-3">
      <a class="dropdown-toggle text-decoration-none" style="color:#00215E;" href="" role="button" data-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name }}
      </a>

      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Edit Profil</a>
        <a class="dropdown-item" href="/auth/logout">Logout</a>
      </div>
    </div>
      @endauth

      @guest
      <li class="nav-item active ml-lg-3">
        <a class="nav-link" href="{{ route('auth.index') }}">
            <button class="btn btn-outline-primary w-100 text-uppercase">Sign up</button>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link pt-md-1 pt-lg-2" href="{{ route('auth.index') }}">
            <button class="btn btn-primary w-100 text-uppercase">Login</button>
        </a>
      </li>
      @endguest
    </ul>
  </div>
</div>
</nav>