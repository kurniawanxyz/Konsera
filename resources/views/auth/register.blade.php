<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from kripton.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 20:05:41 GMT -->

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
    <title>KONSERA | REGISTER</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <h1 class="fw-bold">KONSERA</h1>
                                    </div>
                                    <h4 class="text-center mb-4">Daftarkan akun anda</h4>
                                    <form action="{{ route('auth.register') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Fullname</strong></label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Fullname" value="{{ old('name') }}">
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="hello@example.com" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" value="{{ old('password') }}">
                                        </div>
                                        @error('password')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Sudah punya akun? <a wire:navigate class="text-primary"
                                                href="{{ route('auth.page.login') }}">Masuk</a></p>
                                    </div>
                                </div>
                            </div>
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
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
</body>

<!-- Mirrored from kripton.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 20:05:41 GMT -->

</html>
