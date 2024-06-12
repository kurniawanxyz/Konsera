<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from kripton.dexignzone.com/xhtml/page-error-503.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 20:05:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:title" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:description" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>Konsera </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">503</h1>
                        <h4><i class="fa fa-times-circle text-danger"></i> Layanan Tidak Tersedia</h4>
                        <p>Maaf, kami sedang maintenance!</p>
                        <div>
                            <a class="btn btn-primary" href="{{ Auth::user()->role == 'admin' ? route('admin.dashboard') : route('user.dashboard') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
</body>

<!-- Mirrored from kripton.dexignzone.com/xhtml/page-error-503.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 20:05:42 GMT -->

</html>
