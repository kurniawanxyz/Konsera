<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from theme-land.com/sapp/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 01:22:54 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Korsera | Landing Page</title>

    <!-- Favicon  -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/landing-page/css/style.css') }}">

</head>

<body>
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="{{ asset('assets/images/new-logo.png') }}" alt="brand-logo"
                        style="width: 50px">
                    <img class="navbar-brand-sticky" src="{{ asset('assets/images/new-logo.png') }}" style="width: 50px"
                        alt="sticky brand-logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-inner">
                    <!--  Mobile Menu Toggler -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#features">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#quiz">Quiz</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#grup">Grup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#tutor">Cara kerja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#tim">Tim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.login') }}">Masuk</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7 col-lg-6">
                        <div class="welcome-intro">
                            <h1 class="text-white">Bangun Masa Depanmu dengan Korsera</h1>
                            <p class="text-white my-4">Korsera adalah aplikasi inovatif untuk penilaian dan pengembangan
                                diri. Dapatkan wawasan mendalam tentang kekuatan dan kelemahan Anda, serta strategi yang
                                dipersonalisasi untuk mencapai potensi penuh Anda. Mulailah perjalanan menuju versi
                                terbaik dari diri Anda dengan Korsera.</p>
                            <p class="text-white my-4">Filosofi logo Korsera melambangkan pertumbuhan pribadi. Logo
                                berbentuk huruf "K" berwarna ungu mencerminkan kemajuan dan transformasi diri. Warna
                                ungu melambangkan kreativitas, kebijaksanaan, dan ambisi. Desain logo ini mengajak Anda
                                untuk menemukan potensi tersembunyi dan mewujudkan impian Anda.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-6">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500"
                            data-aos-duration="1000">
                            <img src="{{ asset('assets/images/mockup/Mockup-Dashboard.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape-bottom">
                <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                    <title>sApp Shape</title>
                    <desc>Created with Sketch</desc>
                    <defs></defs>
                    <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                            <path
                                d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395"
                                id="sApp-v1.0"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Counter Area Start ***** -->
        <section class="section counter-area ptb_50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0">
                            <!-- Counter Item -->
                            <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">{{ $users }}</span>
                            </div>
                            <h5>Users</h5>
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0">
                            <!-- Counter Item -->
                            <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">{{ $instruments }}</span>
                            </div>
                            <h5>Instrumen</h5>
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0">
                            <!-- Counter Item -->
                            <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">{{ $criterias }}</span>
                            </div>
                            <h5>Kriteria</h5>
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0">
                            <!-- Counter Item -->
                            <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">{{ $groups }}</span>
                            </div>
                            <h5>Grup</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Counter Area End ***** -->

        <!-- ***** Features Area Start ***** -->
        <section id="features" class="section features-area style-two overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">Fitur</span>
                                Premium
                            </span>
                            <h2>Apa saja layanan yang ditawarkan?</h2>
                            <p class="d-none d-sm-block mt-4">Anda bisa bergabung dengan grup dan mengerjakan quiz,
                                kemudian anda dapat mengenali diri anda lebih dalam dengan melihat rekap pengerjaan.
                            </p>
                            <p class="d-block d-sm-none mt-4">Anda bisa bergabung dengan grup dan mengerjakan quiz,
                                kemudian anda dapat mengenali diri anda lebih dalam dengan melihat rekap pengerjaan.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm"
                                    src="{{ asset('assets/landing-page/img/icon/featured-img/layers.png') }}"
                                    alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Performa Cepat</h3>
                                <p>Web ini merupakan SPA (Single Page Application) yang memungkinkan Anda berpindah
                                    halaman tanpa reload, sehingga meningkatkan kecepatan dan efisiensi penggunaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm"
                                    src="{{ asset('assets/landing-page/img/icon/featured-img/speak.png') }}"
                                    alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Fitur Assesment</h3>
                                <p>Web ini memiliki fitur "Assesment" di mana Anda dapat bergabung dengan grup,
                                    mengerjakan kuis, dan melihat rekap hasil pengerjaannya secara langsung.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm"
                                    src="{{ asset('assets/landing-page/img/icon/featured-img/lock.png') }}"
                                    alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">UI/UX User Friendly</h3>
                                <p>Tampilan yang rapi dan bersih membuat pengguna nyaman dalam mengerjakan kuis yang
                                    tersedia di aplikasi Korsera ini, sehingga meningkatkan pengalaman pengguna dalam
                                    menggunakan web ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Area End ***** -->

        <!-- ***** Service Area Start ***** -->
        <section id="quiz" class="section service-area bg-gray overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <!-- Service Text -->
                        <div class="service-text pt-4 pt-lg-0">
                            <h2 class="text-capitalize mb-4">Kenali Dirimu dengan Mengerjakan Quiz</h2>
                            <!-- Service List -->
                            <ul class="service-list">
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fab fa-buffer"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Dapatkan pemahaman yang mendalam tentang dirimu dengan quiz yang dirancang
                                            khusus untuk mengevaluasi berbagai aspek kepribadian dan kemampuanmu.</p>
                                    </div>
                                </li>
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fas fa-brush"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Desain yang dapat disesuaikan untuk pengalaman pengguna yang lebih baik,
                                            memudahkan Anda dalam menavigasi dan menyelesaikan setiap quiz.</p>
                                    </div>
                                </li>
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fas fa-burn"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Ikuti quiz kami yang inovatif dan menantang untuk menguji kemampuan berpikir
                                            kritis dan keterampilan analitis Anda.</p>
                                    </div>
                                </li>
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fas fa-cart-arrow-down"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Gunakan hasil assessment untuk merencanakan langkah-langkah pengembangan diri
                                            yang lebih efektif dan terarah.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('auth.login') }}" class="btn btn-bordered mt-4">Pelajari Lebih
                                Lanjut</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-1 order-lg-2 d-none d-lg-block">
                        <!-- Service Thumb -->
                        <div class="service-thumb mx-auto">
                            <img src="{{ asset('assets/images/mockup/Mockup-Assesment.png') }}"
                                alt="Mockup Assesment">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Discover Area Start ***** -->
        <section id="grup" class="section discover-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <!-- Discover Thumb -->
                        <div class="service-thumb discover-thumb mx-auto pt-5 pt-lg-0">
                            <img src="{{ asset('assets/images/mockup/Mockup-Group.png') }}" alt="Mockup Group">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <!-- Discover Text -->
                        <div class="discover-text pt-4 pt-lg-0">
                            <h2 class="pb-4 pb-sm-0">Berkomunikasi dengan Grup</h2>
                            <p class="d-none d-sm-block pt-3 pb-4">Aplikasi kami memungkinkan Anda untuk terhubung dan
                                berkomunikasi dengan anggota grup lainnya. Diskusikan hasil kuis, bertukar pikiran, dan
                                dapatkan umpan balik yang berguna.</p>
                            <!-- Check List -->
                            <ul class="check-list">
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">Interaksi yang mudah dan efisien dengan berbagai
                                            fitur komunikasi yang tersedia.</span>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">Diskusi terarah dan produktif untuk meningkatkan
                                            pemahaman dan pengembangan diri.</span>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">Berbagi informasi dan sumber daya dengan anggota
                                            grup secara mudah.</span>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">Komunikasi yang terorganisir dengan baik untuk
                                            menjaga fokus dan tujuan grup.</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="icon-box d-flex mt-3">
                                <div class="service-icon">
                                    <span><i class="fas fa-bell"></i></span>
                                </div>
                                <div class="service-icon px-3">
                                    <span><i class="fas fa-envelope-open"></i></span>
                                </div>
                                <div class="service-icon">
                                    <span><i class="fas fa-video"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Discover Area End ***** -->

        <!-- ***** Work Area Start ***** -->
        <section id="tutor" class="section work-area bg-overlay overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Work Content -->
                        <div class="work-content text-center">
                            <h2 class="text-white">Bagaimana Korsera bekerja?</h2>
                            <p class="d-none d-sm-block text-white my-3 mt-sm-4 mb-sm-5">Anda bisa bergabung dengan
                                grup dan mengerjakan quiz, kemudian anda dapat mengenali diri anda lebih dalam dengan
                                melihat rekap pengerjaan.</p>
                            <p class="d-block d-sm-none text-white my-3">Anda bisa bergabung dengan grup dan
                                mengerjakan quiz, kemudian anda dapat mengenali diri anda lebih dalam dengan melihat
                                rekap pengerjaan.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md"
                                    src="{{ asset('assets/landing-page/img/icon/work/download.png') }}"
                                    alt="Download Icon">
                            </div>
                            <h3 class="text-white py-3">Buat Akun</h3>
                            <p class="text-white">Mulailah dengan membuat akun di Korsera dan dapatkan akses ke
                                berbagai fitur menarik yang kami tawarkan.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md"
                                    src="{{ asset('assets/landing-page/img/icon/work/settings.png') }}"
                                    alt="Settings Icon">
                            </div>
                            <h3 class="text-white py-3">Mengerjakan Kuis</h3>
                            <p class="text-white">Bergabunglah dengan grup, ikuti kuis yang tersedia, dan uji
                                pengetahuan serta kemampuanmu dalam berbagai topik.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md" src="{{ asset('assets/landing-page/img/icon/work/app.png') }}"
                                    alt="App Icon">
                            </div>
                            <h3 class="text-white py-3">Lihat Rekap Pengerjaan</h3>
                            <p class="text-white">Tinjau hasil kuismu untuk memahami lebih dalam tentang dirimu dan
                                identifikasi area yang bisa kamu kembangkan lebih lanjut.</p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- ***** Work Area End ***** -->

        <!-- ***** Screenshots Area Start ***** -->
        {{-- <section id="screenshots" class="section screenshots-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">Awesome</span>
                                Interface
                            </span>
                            <h2 class="text-capitalize">Simple &amp; Beautiful Interface</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                            </p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- App Screenshot Slider Area -->
                        <div class="app-screenshots">
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/1.jpg" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/2.jpg" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/3.jpg" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/4.jpg" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ***** Screenshots Area End ***** -->

        <!-- ***** Review Area Start ***** -->
        {{-- <section id="review" class="review-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">Customer's</span>
                                Reviews
                            </span>
                            <h2 class="text-capitalize">What our customers are saying</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                            </p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Review -->
                        <div class="single-review card">
                            <!-- Card Top -->
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Excellent service &amp; support!!</h4>
                                <!-- Review Text -->
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis,
                                        provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <!-- Quotation Icon -->
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <!-- Reviewer -->
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-1.png"
                                        alt="">
                                </div>
                                <!-- Reviewer Media -->
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Junaid Hasan</h5>
                                    <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Review -->
                        <div class="single-review card">
                            <!-- Card Top -->
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Nice work! Keep it up</h4>
                                <!-- Review Text -->
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis,
                                        provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <!-- Quotation Icon -->
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <!-- Reviewer -->
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-2.png"
                                        alt="">
                                </div>
                                <!-- Reviewer Media -->
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Junaid Hasan</h5>
                                    <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Review -->
                        <div class="single-review card">
                            <!-- Card Top -->
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Great support!!</h4>
                                <!-- Review Text -->
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis,
                                        provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <!-- Quotation Icon -->
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <!-- Reviewer -->
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-3.png"
                                        alt="">
                                </div>
                                <!-- Reviewer Media -->
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Junaid Hasan</h5>
                                    <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ***** Review Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        {{-- <section id="pricing" class="section price-plan-area bg-gray overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>Unlock Full Power Of sApp</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                            </p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                        <div class="row price-plan-wrapper">
                            <div class="col-12 col-md-6">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan text-center p-5 wow fadeInLeft" data-aos-duration="2s"
                                    data-wow-delay="0.4s">
                                    <!-- Plan Thumb -->
                                    <div class="plan-thumb">
                                        <img class="avatar-lg" src="assets/img/pricing/basic.png" alt="">
                                    </div>
                                    <!-- Plan Title -->
                                    <div class="plan-title my-2 my-sm-3">
                                        <h4 class="text-uppercase">Basic</h4>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <h2 class="fw-7"><small class="fw-6">$</small>49</h2>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                        <ul class="plan-features">
                                            <li class="border-top py-3">5GB Linux Web Space</li>
                                            <li class="border-top py-3">5 MySQL Databases</li>
                                            <li class="border-top py-3">24/7 Tech Support</li>
                                            <li class="border-top border-bottom py-3">Daily Backups</li>
                                        </ul>
                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#" class="btn mt-4">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-4 mt-md-0">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan text-center p-5 wow fadeInRight" data-aos-duration="2s"
                                    data-wow-delay="0.4s">
                                    <!-- Plan Thumb -->
                                    <div class="plan-thumb">
                                        <img class="avatar-lg" src="assets/img/pricing/premium.png" alt="">
                                    </div>
                                    <!-- Plan Title -->
                                    <div class="plan-title my-2 my-sm-3">
                                        <h4 class="text-uppercase">Pro</h4>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <h2 class="fw-7"><small class="fw-6">$</small>129</h2>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                        <ul class="plan-features">
                                            <li class="border-top py-3">10GB Linux Web Space</li>
                                            <li class="border-top py-3">50 MySQL Databases</li>
                                            <li class="border-top py-3">Unlimited Email</li>
                                            <li class="border-top border-bottom py-3">Daily Backups</li>
                                        </ul>
                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#" class="btn mt-4">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-5">
                    <p class="text-body pt-4 fw-5">Not sure what to choose? <a href="#">Contact Us</a></p>
                </div>
            </div>
        </section> --}}
        <!-- ***** Price Plan Area End ***** -->

        <!-- ***** FAQ Area Start ***** -->
        {{-- <section class="section faq-area style-two ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Frequently asked questions</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                            </p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- FAQ Content -->
                        <div class="faq-content">
                            <!-- sApp Accordion -->
                            <div class="accordion" id="sApp-accordion">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6">
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        How to install sApp?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using 'Content here, content
                                                here', making it look like readable English. Many desktop publishing
                                                packages and web page editors now use Lorem Ipsum as their default model
                                                text.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Can I get support from the Author?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites of the word in classical literature, discovered the
                                                undoubtable source.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Do you have a free trail?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more recently with desktop publishing software
                                                like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        How can I edit my personal information?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Contact form isn't working?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. If you are
                                                going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                                anything embarrassing hidden in the middle of text.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Contact form isn't working?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. If you are
                                                going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                                anything embarrassing hidden in the middle of text.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <p class="text-body text-center pt-4 px-3 fw-5">Haven't find suitable answer? <a
                                            href="#">Tell us what you need.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ***** FAQ Area End ***** -->

        <!-- ***** Team Area Start ***** -->
        <section id="tim" class="section team-area team-style-two overflow-hidden ptb_100" id="tim">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Tim Kami</h2>
                            <p class="d-none d-sm-block mt-4">Programmer yang membangun website Korsera ini.
                            </p>
                            <p class="d-block d-sm-none mt-4">Programmer yang membangun website Korsera ini.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="{{ asset('assets/images/avatar/adi.jpeg') }}" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Adi Kurniawan</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Web Developer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="https://github.com/KaitoDeCode" target="_blank"><i
                                                class="fab fa-github"></i></a>
                                        <a class="p-2" href="https://www.instagram.com/_this.adi/"
                                            target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="{{ asset('assets/images/avatar/yafy v2.jpg') }}" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Yafy Habibi</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Web Developer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="https://github.com/Yapidev" target="_blank"><i
                                                class="fab fa-github"></i></a>
                                        <a class="p-2" href="https://www.instagram.com/yafyhbb/"
                                            target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Team Area End ***** -->

        <!-- ***** Download Area Start ***** -->
        {{-- <section class="section download-area overlay-dark ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Download Text -->
                        <div class="download-text text-center">
                            <h2 class="text-white">sApp is available for all devices</h2>
                            <p class="text-white my-3 d-none d-sm-block">sApp is available for all devices, consectetur
                                adipisicing elit. Itaque at harum quam explicabo. Aliquam optio, delectus, dolorem quod
                                neque eos totam. Delectus quae animi tenetur voluptates doloribus commodi dicta modi
                                aliquid deserunt, quis maiores nesciunt autem, aperiam natus.</p>
                            <p class="text-white my-3 d-block d-sm-none">sApp is available for all devices, consectetur
                                adipisicing elit. Vel neque, cumque. Temporibus eligendi veniam, necessitatibus aut id
                                labore nisi quisquam.</p>
                            <!-- Store Buttons -->
                            <div class="button-group store-buttons d-flex justify-content-center">
                                <a href="#">
                                    <img src="assets/img/icon/google-play.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="assets/img/icon/app-store.png" alt="">
                                </a>
                            </div>
                            <span class="d-inline-block text-white fw-3 font-italic mt-3">* Available on iPhone, iPad
                                and all Android devices</span>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ***** Download Area End ***** -->

        <!-- ***** Subscribe Area Start ***** -->
        {{-- <section class="section subscribe-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="subscribe-content text-center">
                            <h2>Subscribe to get updates</h2>
                            <p class="my-4">By subscribing you will get newsleter, promotions adipisicing elit.
                                Architecto beatae, asperiores tempore repudiandae saepe aspernatur unde voluptate
                                sapiente quia ex.</p>
                            <!-- Subscribe Form -->
                            <form class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter your email">
                                </div>
                                <button type="submit" class="btn btn-lg btn-block">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ***** Subscribe Area End ***** -->

        <!--====== Contact Area Start ======-->
        {{-- <section id="contact" class="contact-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Stay Tuned</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                            </p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-5">
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <p class="mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                old.</p>
                            <ul>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <span class="media-body align-self-center">Vestibulum nulla libero, convallis,
                                            tincidunt suscipit diam, DC 2002</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <span class="media-body align-self-center">+1 230 456 789-012 345 6789</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <span class="media-body align-self-center">exampledomain@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-4 pt-md-0">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <form id="contact-form" method="POST"
                                action="https://theme-land.com/sapp/demo/assets/php/mail.php">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject"
                                                placeholder="Subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-block mt-3"><span
                                                class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--====== Contact Area End ======-->

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->

        <!--====== Footer Area Start ======-->
        <footer class="footer-area footer-fixed">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Logo -->
                                <a class="navbar-brand" href="#">
                                    <img class="logo" src="{{ asset('assets/images/new-logo.png') }}"
                                        alt="logo-brand" style="width: 50px">
                                </a>
                                <p class="mt-2 mb-3">Korsera adalah aplikasi untuk penilaian dan pengembangan diri.
                                    Dapatkan wawasan dan strategi personalisasi untuk mencapai potensi penuh. Mulailah
                                    perjalanan Anda dengan Korsera sekarang!</p>
                                <!-- Social Icons -->
                                <div class="social-icons d-flex">
                                    <a class="facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="google-plus" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a class="vine" href="#">
                                        <i class="fab fa-vine"></i>
                                        <i class="fab fa-vine"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Navigasi</h3>
                                <ul>
                                    <li class="py-2"><a class="scroll" href="#home">Home</a></li>
                                    <li class="py-2"><a class="scroll" href="#layanan">Layanan</a></li>
                                    <li class="py-2"><a class="scroll" href="#quiz">Quiz</a></li>
                                    <li class="py-2"><a class="scroll" href="#grup">Grup</a></li>
                                    <li class="py-2"><a class="scroll" href="#tutor">Cara kerja</a></li>
                                    <li class="py-2"><a class="scroll" href="#tim">Tim</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Product Help</h3>
                                <ul>
                                    <li class="py-2"><a href="#">FAQ</a></li>
                                    <li class="py-2"><a href="#">Privacy Policy</a></li>
                                    <li class="py-2"><a href="#">Support</a></li>
                                    <li class="py-2"><a href="#">Terms &amp; Conditions</a></li>
                                    <li class="py-2"><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Download</h3>
                                <!-- Store Buttons -->
                                <div class="button-group store-buttons store-black d-flex flex-wrap">
                                    <a href="#">
                                        <img src="{{ asset('assets/landing-page/img/icon/google-play-black.png') }}"
                                            alt="">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('assets/landing-page/img/icon/app-store-black.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div
                                class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">&copy; Copyrights 2024 Korsera All rights reserved.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">Made with <i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="{{ asset('assets/landing-page/js/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/landing-page/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/landing-page/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('assets/landing-page/js/plugins/plugins.min.js') }}"></script>

    <!-- Active js -->
    <script src="{{ asset('assets/landing-page/js/active.js') }}"></script>

</body>


<!-- Mirrored from theme-land.com/sapp/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 01:23:08 GMT -->

</html>
