<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('dashboard') }}/assets/images/logo.svg">
    <title>Aplikasi Kasir</title>
    {{-- data tabel --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/feather.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/select2.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/dropzone.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/uppy.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/jquery.steps.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/daterangepicker.css">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/app-dark.css" id="darkTheme" disabled>

    {{-- map --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

</head>

<body>
    {{-- <div class="hero" style="background-image: url('{{ asset('dashboard') }}/images/honda.jpg')"> --}}
        <div class="container-scroller py-5">
            <div class="row w-100 mx-0 py-5">
                <div class="col-lg-4 mx-auto shadow">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            {{-- <img src="{{ asset('dashboard') }}/images/logo.svg" alt="logo"> --}}
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign up to continue.</h6>
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        <form class="pt-3" action="/create/pelanggan" method="post">
                            @csrf
                            <div class="form-group mt-3">
                                <input type="text" name="username" class="form-control form-control-lg" id="username"
                                    placeholder="username">
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    id="password" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-sm mb-3 btn-secondary col col-12">SIGN UP</button>
                            </div>
                            {{-- <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="/register">Create</a>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
    {{-- </div> --}}
    <!-- container-scroller -->
       {{-- data table --}}
       <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
       <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
       <script>
           new DataTable('#example');
       </script>
       {{-- end data table --}}
       {{-- map --}}
       <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
           integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
       <script src="{{ asset('dashboard') }}/js/jquery.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/map.js"></script>
       <script src="{{ asset('dashboard') }}/js/popper.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/moment.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/bootstrap.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/simplebar.min.js"></script>
       <script src='{{ asset('dashboard') }}/js/daterangepicker.js'></script>
       <script src='{{ asset('dashboard') }}/js/jquery.stickOnScroll.js'></script>
       <script src="{{ asset('dashboard') }}/js/tinycolor-min.js"></script>
       <script src="{{ asset('dashboard') }}/js/config.js"></script>
       <script src="{{ asset('dashboard') }}/js/d3.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/topojson.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/datamaps.all.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/datamaps-zoomto.js"></script>
       <script src="{{ asset('dashboard') }}/js/datamaps.custom.js"></script>
       <script src="{{ asset('dashboard') }}/js/Chart.min.js"></script>
       <script>
           /* defind global options */
           Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
           Chart.defaults.global.defaultFontColor = colors.mutedColor;
       </script>
       <script src="{{ asset('dashboard') }}/js/gauge.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/jquery.sparkline.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/apexcharts.min.js"></script>
       <script src="{{ asset('dashboard') }}/js/apexcharts.custom.js"></script>
       <script src='{{ asset('dashboard') }}/js/jquery.mask.min.js'></script>
       <script src='{{ asset('dashboard') }}/js/select2.min.js'></script>
       @stack('script')
       <script src='{{ asset('dashboard') }}/js/jquery.steps.min.js'></script>
       <script src='{{ asset('dashboard') }}/js/jquery.validate.min.js'></script>
       <script src='{{ asset('dashboard') }}/js/jquery.timepicker.js'></script>
       <script src='{{ asset('dashboard') }}/js/dropzone.min.js'></script>
       <script src='{{ asset('dashboard') }}/js/uppy.min.js'></script>
       <script src='{{ asset('dashboard') }}/js/quill.min.js'></script>
       <script>

</body>

</html>
