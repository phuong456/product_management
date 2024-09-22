<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>

<body>
    <h1>Product List</h1>
    <h3><a href="{{ url('create') }}">Create Product</a></h3>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->name }}</td>
                    <td>{{ $b->quantity }}</td>
                    <td>{{ $b->price }}</td>
                    <td>
                        <a href="{{ url("update/{$b->id}") }}">Update</a>
                        <a href="{{ url("delete/{$b->id}") }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
