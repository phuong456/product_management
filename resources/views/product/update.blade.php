<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
</head>

<body>
    <h1>Update Product</h1>
    <form action="{{ url("postUpdate/{$b->id}") }}" method="POST">
        {{ @csrf_field() }}
        <div>Id: <input name="id" value="{{ $b->id }}" readonly></div>
        <div>Name: <input type="text" name="name" value="{{ $b->name }}"></div>
        <div>Quantity: <input type="text" name="quantity" value="{{ $b->quantity }}"></div>
        <div>Price: <input type="text" name="price" value="{{ $b->price }}"></div>
        <div><input type="submit" value="Update"></div>
    </form>
</body>

</html>
