@extends('layouts.app_dashboard')
@section('content')
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('put')
        <label for="">Product name</label>
        <input type="text" name="product_name" value="{{ $product->product_name }}">

        <label for="">Price</label>
        <input type="number" name="price" value="{{ $product->price }}">
        <label for="">Stock</label>
        <input type="number" name="stock" value="{{ $product->stock }}">

        <label for="">description</label>
        <textarea name="desc" id="" cols="30" rows="10">{{ $product->desc }}</textarea>

        <select name="category_id" id="">
            @foreach ($category as $c)
                @if ($product->category_id == $c->id)
                    <option selected value="{{ $c->id }}">{{ $c->category_name }}</option>
                @else
                    <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                @endif
            @endforeach
        </select>

        <input type="file" name="product_image" accept=".jpg, .jpeg, .png" id="">


        <button type="submit">Submit</button>

    </form>
@endsection
