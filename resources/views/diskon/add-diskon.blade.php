<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="nama_diskonviewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4>Add Diskon</h4>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/create/produk" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>nama_produk</td>
                <td><input type="text" name="nama_produk" id=""></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="gambar_produk" id=""></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="number" name="harga" id=""></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Awal</td>
                <td><input type="date" name="tanggal_kadaluarsa" id=""></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori_produk_id" id=""></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td><input type="text" name="diskon_produk_id" id=""></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="SIMPAN">
                </td>
            </tr>
        </table>
        <table border="1">
            <tr>
                <td>Foto</td>
            </tr>
            @foreach ($foto as $item)
                <tr>
                    <td><img src="/storage/{{ $item->gambar_produk }}" alt=""></td>
                    <td>{{ $item->harga}}</td>
                </tr>
            @endforeach
        </table>
    </form>
</body>

</html>
