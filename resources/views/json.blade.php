<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Product</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
        <div class="table-responsive">
            <div class="py-4">
            <h1>Produk LIst</h1>
            </div>
    <table class="table">
        <thead>
            <tr>
            <th>Images</th>
            <th>Title</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Stok</th>
            <th>Price</th>
            <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data['products'] as $item )
            <tr>
                <td>
                 @foreach ($item['images'] as $image)
                <li><img src="{{ $image }}" alt="Product Image"></li>
                @endforeach
                </td>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['category'] }}</td>
                <td>{{ $item['brand'] }}</td>
                <td>{{ $item['stock'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td> <button class="btn btn-primary">view</button></td>
            </tr>
            @endforeach

        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>
