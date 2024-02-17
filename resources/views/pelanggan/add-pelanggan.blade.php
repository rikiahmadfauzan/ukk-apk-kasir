<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="nama_diskonviewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4>PELANGGAN</h4>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/create/pelanggan" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>nama_pelanggan</td>
                <td><input type="text" name="nama_pelanggan" id=""></td>
            </tr>
            <tr>
                <td>No_telpon</td>
                <td><input type="number" name="no_telpon" id=""></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="SIMPAN">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
