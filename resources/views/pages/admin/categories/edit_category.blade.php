<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/admin/category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">category</label>
        <input type="text" value="{{ $category->category_name }}" name="category_name">

        <input type="file" name="icon" accept=".jpg, .jpeg, .png">
        <button type="submit">Submit</button>

    </form>

</body>

</html>
