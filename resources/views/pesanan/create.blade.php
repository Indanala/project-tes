<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Penambahan Barang</title>
</head>
<body>
    <div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8 col-xl-6">
        <h1>Penambahan Data</h1>
        <hr>
    <form method="POST" action="{{ route('pesanans.store') }}">
        @csrf
        <div class="mb-3">
            <label for="no_pesanan">No Pesanan:</label>
            <input type="text" name="no_pesanan" id="no_pesanan" required>
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal:</label>
            <input type="text" name="tanggal" id="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="nm_supplier">Nama Supplier : </label>
            <input type="text" name="nm_supplier" id="nm_supplier" required>
        </div>
        <div class="mb-3">
            <label for="nm_produk">Nama Produk : </label>
            <input type="text" name="nm_produk" id="nm_produk" required>
        </div>
        <div class="mb-3">
            <label for="total">Total : </label>
            <input type="text" name="total" id="total" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
    </form>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
