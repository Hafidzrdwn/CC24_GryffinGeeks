@extends('layouts.app_dashboard')

@section('content')

    @foreach ($category as $c)
        <p>{{ $c->category_name }}</p>
        <form action="{{ route('category.destroy', $c->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>

        <a href="{{ route('category.edit', $c->id) }}">Edit</a>
    @endforeach
@endsection
