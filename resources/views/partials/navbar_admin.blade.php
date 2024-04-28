<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom text-uppercase">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" style="width:38px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2 mt-lg-0 mt-xl-0" id="navbarNav">
            <ul class="navbar-nav ml-lg-5">
                <li class="nav-item active">
                    <a class="nav-link" href="/admin/dashboard">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-lg-4" href="{{ route('product.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-lg-4" href="{{ route('category.index') }}">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link pt-md-1 pt-lg-2" href="/auth/logout">
                        <button class="btn btn-danger w-100 text-uppercase">Logout</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
