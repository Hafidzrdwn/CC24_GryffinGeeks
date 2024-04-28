<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="email">Email</label>
        <input type="email" name="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="">

        <input type="file" name="photo" id="">

        <button type="submit">submit</button>
    </form>

</body>

</html>
