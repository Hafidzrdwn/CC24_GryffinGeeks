<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @foreach ($product as $p)
        <p>{{ $p }}</p>
        <form action="{{ route('product.destroy', $p->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    @endforeach

</body>

</html>
