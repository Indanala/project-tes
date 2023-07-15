<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Pesanan</title>
</head>
<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">

                <div class="py-4">
                    <h2>Tabel Pesanan</h2>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Supplier</th>
                            <th>Nama Produk</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesanans as $pesanan )
                           <tr>
                            <th>{{$pesanan->no_pesanan}}</th>
                            <th>{{$pesanan->tanggal}}</th>
                            <th>{{$pesanan->nm_supplier}}</th>
                            <th>{{$pesanan->nm_produk}}</th>
                            <th>{{$pesanan->total}}</th>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</body>
</html>
