@extends('layouts.app')
 
@section('title', 'Best E-commerce')
 
@section('content')
    <section id="hero-banner">

        <div class="row align-items-center flex-row-reverse w-100">
            <div class="col-lg-6 col-12 text-center text-lg-left">
                <h1 style="font-size:68px; color:#00215E;">Merah Putih</h1>
                <h4>Toko Online Terbaik Asli Indonesia!</h4>
                <p>Menyediakan berbagai produk berkualitas dan harga pas di kantong.</p>
                <a href="" class="btn text-white" style="background:#00215E;"> Explore Now! </a>
            </div>
            <div class="col-lg-6 col-12 mt-lg-0 mt-5">
                <img class="w-100" src="{{ asset('images/home.png') }}">
            </div>
        </div>

    </section>
    <section id="categories" class="my-5 mx-4">

        <h2 style="color:#00215E;">Macam Kategori</h2>
        <h6>Beberapa kategori yang dapat anda eksplor!</h6>

        <div class="row mt-4 justify-content-center align-items-start flex-wrap mx-0" style="row-gap: 15px;">
        @forelse($categories as $c)
            <div class="col-lg-3 col-6 col-sm-6 px-2">
                <div class="card" >
                <div class="card-body">
                    <img src="{{ $c->icon }}" class="w-50 d-block mx-auto">
                    <h3 style="color:#00215E;" class="text-center">{{ $c->category_name }}</h5>
                </div>
                </div>
            </div>    
        @empty
            <h3 class="text-center">Data Kategori Kosong.</h3>
        @endforelse
        </div>

    </section>
    <section id="new-products" class="my-5 mx-4">
        <h2 style="color:#00215E;">Produk Baru</h2>
        <h6>Produk keluaran terbaru yang tentunya menarik!</h6>

        <div class="row mt-4 justify-content-center align-items-start" style="row-gap: 15px;">
        @forelse($products as $p)
            <div class="col-lg-3 col-md-4 col-6 px-2">
                <div class="card shadow">
                    <img src="{{ $p->product_image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-text" style="font-size: 18px;">{{$p->product_name}}</h6>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div class="text-price">Rp. {{$p->price}}</div>
                            <div class="text-rating" style="color:#00215E;">
                                <i class="fas fa-star" style="font-size: 16px;"></i>
                                <span>4.6</span>
                            </div>
                        </div>

                        <a href="" class="mt-4 w-100 btn text-white" style="background:#00215E;">Detail Produk</a>
                    </div>
                </div>
            </div>
            @empty
            <h3 class="text-center">Data Produk Kosong.</h3>
        @endforelse        
        </div>

    </section>
@endsection