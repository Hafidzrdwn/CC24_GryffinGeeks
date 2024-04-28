<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/admin/category" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">category_name</label>
        <input type="text" name="category_name" id="">
        <input type="file" name="logo" id="">
        <button type="submit">Submit</button>
    </form>

</body>

</html>
