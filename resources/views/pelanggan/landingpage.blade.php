<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop | Alex</title>
    <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/mdi/css/materialdesignicons.min.css">

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('landing') }}/css/styles.css" rel="stylesheet" />
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fw-bold fst-italic" href="#!">Enter <span class="text-white">Caffe</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/cafe">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/riwayat">Pesanan</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/allproduct">All Menu</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="/makanan">Food</a></li>
                            <li><a class="dropdown-item" href="/minuman">Drink</a></li>
                        </ul>
                    </li>
                </ul>

                <a href=/cart><button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        {{-- <span class="badge bg-dark text-white ms-1 rounded-pill">{{ $carts }}</span> --}}
                    </button>
                </a>

            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer-->
    {{-- <footer class="py-2 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright &copy; rikiahamadfauzan 2023
            </p>
        </div>
    </footer> --}}
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('landing') }}js/scripts.js"></script>
</body>

</html>
