<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach($products as $product)
    <div>
        <p>{{ $product->name }}</p>
        <p>{{ $product->price }}</p>
        <form action="{{ route('cart.add') }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit">Tambahkan ke Keranjang</button>
        </form>
    </div>
@endforeach

@if(session('cart'))
    <ul>
        @foreach(session('cart') as $productId)
            <li>{{ $productId }}</li>
        @endforeach
    </ul>
    <form action="{{ route('cart.checkout') }}" method="post">
        @csrf
        <button type="submit">Checkout</button>
    </form>
@else
    <p>Keranjang belanja kosong.</p>
@endif

</body>
</html>
