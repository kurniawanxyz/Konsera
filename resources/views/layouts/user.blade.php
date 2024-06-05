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
                <svg class="brand-title" width="103" height="31" viewBox="0 0 103 31" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="svg-logo-title"
                        d="M10.284 23L5.524 16.448V23H0.736V2.28H5.524V13.732L10.256 7.376H16.164L9.668 15.216L16.22 23H10.284ZM22.8326 9.98C23.3926 9.12133 24.0926 8.44933 24.9326 7.964C25.7726 7.46 26.7059 7.208 27.7326 7.208V12.276H26.4166C25.2219 12.276 24.3259 12.5373 23.7286 13.06C23.1313 13.564 22.8326 14.46 22.8326 15.748V23H18.0446V7.376H22.8326V9.98ZM32.4292 5.752C31.5892 5.752 30.8985 5.50933 30.3572 5.024C29.8345 4.52 29.5732 3.904 29.5732 3.176C29.5732 2.42933 29.8345 1.81333 30.3572 1.328C30.8985 0.823998 31.5892 0.571998 32.4292 0.571998C33.2505 0.571998 33.9225 0.823998 34.4452 1.328C34.9865 1.81333 35.2572 2.42933 35.2572 3.176C35.2572 3.904 34.9865 4.52 34.4452 5.024C33.9225 5.50933 33.2505 5.752 32.4292 5.752ZM34.8092 7.376V23H30.0212V7.376H34.8092ZM43.067 9.588C43.5336 8.86 44.1776 8.272 44.999 7.824C45.8203 7.376 46.7816 7.152 47.883 7.152C49.171 7.152 50.3376 7.47867 51.383 8.132C52.4283 8.78533 53.2496 9.71867 53.847 10.932C54.463 12.1453 54.771 13.5547 54.771 15.16C54.771 16.7653 54.463 18.184 53.847 19.416C53.2496 20.6293 52.4283 21.572 51.383 22.244C50.3376 22.8973 49.171 23.224 47.883 23.224C46.8003 23.224 45.839 23 44.999 22.552C44.1776 22.104 43.5336 21.5253 43.067 20.816V30.448H38.279V7.376H43.067V9.588ZM49.899 15.16C49.899 13.9653 49.563 13.032 48.891 12.36C48.2376 11.6693 47.4256 11.324 46.455 11.324C45.503 11.324 44.691 11.6693 44.019 12.36C43.3656 13.0507 43.039 13.9933 43.039 15.188C43.039 16.3827 43.3656 17.3253 44.019 18.016C44.691 18.7067 45.503 19.052 46.455 19.052C47.407 19.052 48.219 18.7067 48.891 18.016C49.563 17.3067 49.899 16.3547 49.899 15.16ZM65.9909 18.94V23H63.5549C61.8189 23 60.4655 22.58 59.4949 21.74C58.5242 20.8813 58.0389 19.4907 58.0389 17.568V11.352H56.1349V7.376H58.0389V3.568H62.8269V7.376H65.9629V11.352H62.8269V17.624C62.8269 18.0907 62.9389 18.4267 63.1629 18.632C63.3869 18.8373 63.7602 18.94 64.2829 18.94H65.9909ZM75.7699 23.224C74.2392 23.224 72.8579 22.8973 71.6259 22.244C70.4125 21.5907 69.4512 20.6573 68.7419 19.444C68.0512 18.2307 67.7059 16.812 67.7059 15.188C67.7059 13.5827 68.0605 12.1733 68.7699 10.96C69.4792 9.728 70.4499 8.78533 71.6819 8.132C72.9139 7.47867 74.2952 7.152 75.8259 7.152C77.3565 7.152 78.7379 7.47867 79.9699 8.132C81.2019 8.78533 82.1725 9.728 82.8819 10.96C83.5912 12.1733 83.9459 13.5827 83.9459 15.188C83.9459 16.7933 83.5819 18.212 82.8539 19.444C82.1445 20.6573 81.1645 21.5907 79.9139 22.244C78.6819 22.8973 77.3005 23.224 75.7699 23.224ZM75.7699 19.08C76.6845 19.08 77.4592 18.744 78.0939 18.072C78.7472 17.4 79.0739 16.4387 79.0739 15.188C79.0739 13.9373 78.7565 12.976 78.1219 12.304C77.5059 11.632 76.7405 11.296 75.8259 11.296C74.8925 11.296 74.1179 11.632 73.5019 12.304C72.8859 12.9573 72.5779 13.9187 72.5779 15.188C72.5779 16.4387 72.8765 17.4 73.4739 18.072C74.0899 18.744 74.8552 19.08 75.7699 19.08ZM96.006 7.208C97.8353 7.208 99.2913 7.80533 100.374 9C101.475 10.176 102.026 11.8 102.026 13.872V23H97.266V14.516C97.266 13.4707 96.9953 12.6587 96.454 12.08C95.9127 11.5013 95.1847 11.212 94.27 11.212C93.3553 11.212 92.6273 11.5013 92.086 12.08C91.5447 12.6587 91.274 13.4707 91.274 14.516V23H86.486V7.376H91.274V9.448C91.7593 8.75733 92.4127 8.216 93.234 7.824C94.0553 7.41333 94.9793 7.208 96.006 7.208Z"
                        fill="#363062" />
                </svg>
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
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                @yield('title')
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <div class="input-group search-area d-xl-inline-flex d-none">
                                    <div class="input-group-append">
                                        <button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="flaticon-381-ring"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3"
                                        style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/profile/pic1.jpg') }}" width="20"
                                        alt="" />
                                    <div class="header-info">
                                        <span>Johndoe</span>
                                        <small>Super Admin</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <div class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span onclick="handleLogout('formLogout')" class="ms-2">Logout </span>
                                    </div>
                                    <form class="d-none" id="formLogout" action="{{route('auth.logout')}}" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('user.dashboard') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-home-2"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="{{ route('user-groups.index') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-home-2"></i>
                            <span class="nav-text">Grup</span>
                        </a>
                    </li>
                    <li><a href="{{ route('user-instruments.index') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-home-2"></i>
                            <span class="nav-text">Instrumen</span>
                        </a>
                    </li>
                </ul>

                <div class="book-box">
                    <img src="images/book.png" alt="">
                    <a href="javascript:void(0);">Generate Report ></a>
                </div>
                <div class="copyright">
                    <p><strong>Kripton Crypto Admin Dashboard</strong> © 2022 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
                </div>
            </div>
        </div>
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
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> 2022</p>
            </div>
        </div>
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
                if (result) {
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
                if (result) {
                    $(`#${formId}`).submit();
                }
            });
        }

        function handleDelete(url) {
            Swal.fire({
                type: 'warning',
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus itu!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Terhapus!',
                                'Grup telah dihapus.',
                                'success'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                'Gagal menghapus grup.',
                                'error'
                            );
                        }
                    });
                }
            });
        }

        function carouselReview() {
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 20,
                nav: false,
                rtl: true,
                dots: false,
                navText: ['', ''],
                responsive: {
                    0: {
                        items: 3
                    },
                    450: {
                        items: 4
                    },
                    600: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },

                    1200: {
                        items: 7
                    },
                    1601: {
                        items: 5
                    }
                }
            })
        }
        jQuery(window).on('load', function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });
    </script>
</body>

<!-- Mirrored from kripton.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 20:04:46 GMT -->

</html>
