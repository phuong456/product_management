<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>

<body>
    <h1>Create Product</h1>
    <form action="{{ url('postCreate') }}" method="POST">
        {{ @csrf_field() }}
        <div>Id: <input type="text" name="id" id="id"></div>
        <div>Name: <input type="text" name="name"></div>
        <div>Quantity: <input type="text" name="quantity"></div>
        <div>Price: <input type="text" name="price"></div>
        <div><input type="submit" value="Create"></div>
    </form>
</body>

</html>
