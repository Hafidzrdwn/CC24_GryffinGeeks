<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Product name</label>
        <input type="text" name="product_name">

        <label for="">Price</label>
        <input type="number" name="price">
        <label for="">Stock</label>
        <input type="number" name="stock">

        <label for="">description</label>
        <textarea name="desc" id="" cols="30" rows="10"></textarea>

        <select name="category_id" id="">
            @foreach ($category as $c)
                <option value="{{ $c->id }}">{{ $c->category_name }}</option>
            @endforeach
        </select>

        <input type="file" name="product_image" accept=".jpg, .jpeg, .png" id="">

        <button type="submit">Submit</button>

    </form>


</body>

</html>
