<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Produk</title>
</head>
<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">

                <div class="py-3">
                    <h2 class="h2">Detail Produk {{$data['products']['title']}}</h2>
                    <hr>
                </div>

                <ul>
                    <li>{{$data['products']['brand']}}</li>
                    <li>{{$data['products']['category']}}</li>
                    <li>{{$data['products']['rating']}}</li>
                    <li>{{$data['products']['stok']}}</li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
