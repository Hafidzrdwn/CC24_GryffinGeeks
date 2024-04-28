@extends('layouts.app_dashboard')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Desc</th>
                <th scope="col">Category</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($product as $p)
                <tr>
                    <th scope="row">{{ $p->product_name }}</th>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->stock }}</td>
                    <td>{{ $p->desc }}</td>
                    <td>{{ $p->category->category_name }}</td>
                    <td><a href="{{ route('product.show', $p->id) }}" class="btn btn-primary btn-sm text-uppercase">Show</a>
                    </td>
                    <td><a href="{{ route('product.edit', $p->id) }}" class="btn btn-warning btn-sm text-uppercase">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('product.destroy', $p->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm text-uppercase">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
