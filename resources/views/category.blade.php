<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @foreach ($category as $c)
        <p>{{ $c->category_name }}</p>
        <form action="{{ route('category.destroy', $c->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>

        <a href="{{ route('category.edit', $c->id) }}">Edit</a>
    @endforeach

</body>

</html>
