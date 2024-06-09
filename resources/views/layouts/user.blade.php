<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kripton.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 20:04:18 GMT -->

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
    <title>
        @yield('title')
    </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <style>
        textarea {
            resize: none;
        }
    </style>

    @livewireStyles
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" xmlns="http://www.w3.org/2000/svg" width="51" height="51" fill="none">
                    <path class="svg-logo-pattern"
                        d="M12.683 49.636c0 .488-.392.88-.877.88a.88.88 0 0 1-.88-.88v-6.827a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.827zm-11.757-10a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.83a.88.88 0 0 1 .877.88c0 .485-.392.877-.877.877H.926zm0-26.999a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.83c.485 0 .877.392.877.88s-.392.877-.877.877H.926zm0 6.751a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.83c.485 0 .877.392.877.877s-.392.88-.877.88H.926zm0 6.751a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.83c.485 0 .877.392.877.877a.88.88 0 0 1-.877.88H.926zm0 6.75a.88.88 0 1 1 0-1.761h6.83a.88.88 0 0 1 0 1.761H.926zM10.926.88a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.83c0 .485-.392.877-.877.877s-.88-.392-.88-.877V.88zm26.999 0a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.83c0 .485-.392.877-.877.877a.88.88 0 0 1-.88-.877V.88zm-6.751 0a.88.88 0 1 1 1.761 0v6.83a.88.88 0 1 1-1.761 0V.88zm-6.747 0a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.83a.88.88 0 0 1-.88.877c-.485 0-.877-.392-.877-.877V.88zm-6.751 0a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.83c0 .485-.392.877-.88.877s-.877-.392-.877-.877V.88zm32.005 36.998a.88.88 0 0 1 .881.88c0 .485-.392.877-.881.877h-6.827a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.827zm0-26.999a.88.88 0 0 1 .881.88c0 .485-.392.877-.881.877h-6.827a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.827zm0 6.751c.488 0 .881.392.881.877a.88.88 0 0 1-.881.88h-6.827a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.827zm0 6.751c.488 0 .881.392.881.877a.88.88 0 0 1-.881.88h-6.827a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.827zm0 6.747a.88.88 0 1 1 0 1.761h-6.827a.88.88 0 0 1 0-1.761h6.827zm-9.999 18.508c0 .488-.392.88-.877.88a.88.88 0 0 1-.88-.88v-6.827a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.827zm-6.747 0a.88.88 0 1 1-1.761 0v-6.827a.88.88 0 1 1 1.761 0v6.827zm-6.75 0a.88.88 0 0 1-.88.88c-.485 0-.877-.392-.877-.88v-6.827a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.827zm-6.75 0a.88.88 0 0 1-.88.88c-.485 0-.877-.392-.877-.88v-6.827a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.827z"
                        fill="#363062" />
                    <g fill-rule="evenodd">
                        <path class="svg-logo-path"
                            d="M11.806 7.711h26.999c2.226 0 4.05 1.821 4.05 4.05v26.999c0 2.226-1.824 4.05-4.05 4.05H11.806c-2.229 0-4.05-1.824-4.05-4.05V11.76a4.06 4.06 0 0 1 4.05-4.05z"
                            fill="#4d4c7d" />
                        <path class="svg-logo-path"
                            d="M35.287 7.711h3.518c2.226 0 4.05 1.821 4.05 4.05v26.999c0 2.226-1.824 4.05-4.05 4.05h-3.518c2.229 0 4.053-1.824 4.053-4.05V11.76c0-2.229-1.824-4.05-4.053-4.05z"
                            fill="#363062" />
                        <path class="svg-bg-path"
                            d="M14.733 13.75h21.142a.94.94 0 0 1 .937.937v21.142a.94.94 0 0 1-.937.937H14.733a.94.94 0 0 1-.937-.937V14.687a.94.94 0 0 1 .937-.937z"
                            fill="#fff" />
                        <path class="svg-bg-path"
                            d="M32.36 13.75h3.515a.94.94 0 0 1 .937.937v21.142a.94.94 0 0 1-.937.937H32.36a.94.94 0 0 0 .937-.937V14.687a.94.94 0 0 0-.937-.937z"
                            fill="#fff" />
                    </g>
                    <path class="svg-logo-path"
                        d="M23.171 18.75v-1.153a.88.88 0 1 1 1.761 0v1.153h1.837v-1.153c0-.485.392-.877.88-.877s.877.392.877.877v1.259a3.75 3.75 0 0 1 1.741.977c.674.671 1.093 1.595 1.093 2.611a3.67 3.67 0 0 1-1.319 2.814c.834.701 1.319 1.724 1.319 2.817 0 1.013-.419 1.937-1.093 2.608-.475.472-1.073.817-1.741.98v1.256a.88.88 0 0 1-.877.88.88.88 0 0 1-.88-.88v-1.15h-1.837v1.15a.88.88 0 1 1-1.761 0v-1.15h-3.043a.88.88 0 0 1 0-1.761h.921v-9.501h-.921a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h3.043zm4.478 7.388h-4.844v3.87h4.844c.538 0 1.026-.216 1.382-.568a1.92 1.92 0 0 0 .572-1.365 1.93 1.93 0 0 0-.572-1.369c-.355-.352-.844-.568-1.382-.568zm0-5.631h-4.844v3.874h4.844a1.96 1.96 0 0 0 1.382-.571 1.92 1.92 0 0 0 .572-1.366c0-.531-.219-1.017-.572-1.369a1.97 1.97 0 0 0-1.382-.568z"
                        fill="#4d4c7d" />
                </svg>
                <h1 class="fw-bold text-black m-0 brand-title">KORSERA</h1>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        {{-- Livewire Navbar Component --}}
        <livewire:user.components.navbar />
        {{-- Livewire Navbar Component --}}

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->

        {{-- Livewire Sidebar Component --}}
        <livewire:user.components.sidebar />
        {{-- Livewire Sidebar Component --}}

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/sweetalert.init.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('js/plugins-init/chartjs-init.js')}}  "></script>

    @livewireScripts

    {{-- Fix Modal Backdrop Issues --}}
    <script>
        $.fn.modal.Constructor.prototype.show = () => $('.modal-backdrop').not(":first").remove()
    </script>
    {{-- Fix Modal Backdrop Issues --}}

    @yield("script")

    <script>
        function handleLogout(formId) {
            Swal.fire({
                title: 'Apakah Anda yakin ingin Logout ?',
                text: "Anda tidak akan dapat mengembalikan tindakan ini!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Logout!'
            }).then((result) => {
                if (result.value) {
                    $(`#${formId}`).submit();
                }
            });
        }

        function handleConfirmDelete(formId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan tindakan ini!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.value) {
                    $(`#${formId}`).submit();
                }
            });
        }
    </script>
</body>

<!-- Mirrored from kripton.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 20:04:46 GMT -->

</html>
