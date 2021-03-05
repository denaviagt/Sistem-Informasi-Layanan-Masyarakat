<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Info Desa Jogotirto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/main-logo.png') }}">

    <!-- CSS here -->
    <link href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/flaticons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/magnific-popup.css') }}">
    {{-- <link href="{{ asset('dist/css/icons/font-awesome/css/fontawesome.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css"
        integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('dist/css/themify-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingcss.css') }}">
    <style>
        .natural-resource-img img {
            width: 100%
        }

    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo ">
                                <a href="{{ url('/') }}" class="d-flex text-dark">
                                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="40px">
                                    <div class="ml-3">
                                        <span class="font-weight-bold">Kalurahan <br> Jogotirto</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        {{-- <li><a href="{{ url('/') }}"> Beranda</a></li> --}}
                                        <li><a href="#strukturOrganisasi">Struktur Organisasi</a></li>
                                        <li><a href="#vision">Visi</a></li>
                                        <li><a href="#mission">Misi</a></li>
                                        <li class="active"><a href="#infoKalurahan">Info Kalurahan</a></li>
                                        <li><a href="#potensiKalurahan">Potensi Kalurahan</a></li>
                                        <li><a href="#">Info Layanan</a>
                                            <ul class="submenu dropdown-menu-right">
                                                @foreach ($serviceCategories as $serviceCategory)
                                                    <li><a
                                                            href="{{ url('detail-service-info/' . $serviceCategory->id) }}">
                                                            {{ $serviceCategory->category }}</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>


    <div class="container" style="padding-top: 120px">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <h2>Info Kalurahan</h2>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid"
                                src="{{ asset('uploads/images/village_info/' . $villageInfo->thumbnail) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $villageInfo->title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="ti-user"></i>{{ $admin->full_name }}</a></li>
                                <li><a href="#"><i
                                            class="ti-comment-alt"></i>{{ $villageInfo->date->isoFormat('dddd, D MMMM Y') }}</a>
                                </li>
                            </ul>
                            <p class="excert">
                                {!! $villageInfo->content !!}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://i.pinimg.com/236x/98/72/df/9872df28885cd34453195df87bb21e82.jpg"
                                            width="75px" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>Space The Final Frontier</h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4>Telescopes 101</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid"
                                            src="https://i.pinimg.com/236x/6f/14/87/6f148777013fe8b204e8cf2e0a136550.jpg"
                                            width="75px" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Info Terbaru</h3>
                            @foreach ($villageInfos as $item)
                                <div class="media post_item">
                                    <img src="{{ asset('uploads/images/village_info/' . $item->thumbnail) }}"
                                        width="50px" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>{{ $item->title }}</h3>
                                        </a>
                                        <p>{{ $item->date->isoFormat('dddd, D MMMM Y') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>

        <!-- Footer Start-->
        <div class="footer-main">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-6 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="#" class="d-flex">
                                        <img src="{{ asset('assets/img/logo.jpg') }}" alt="" height="50px">
                                        <h4 class="ml-4 text-primay font-weight-bold">Kalurahan Jogotirto</h4>
                                    </a>

                                </div>
                                <div class="footer-tittle">
                                    <div class="d-flex">
                                        <i class="ti-location-pin mr-2 mt-2"></i>
                                        <p>Karongan, Jogotirto, Berbah, Sleman, Daerah Istimewa Yogyakarta 55573</p>
                                    </div>
                                    {{-- <div class="d-flex">
                                        <i class="ti-mobile mr-2 mt-1"></i>
                                        <p>089514953073</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navigasi</h4>
                                    <ul>
                                        <li><a href="#strukturOrganisasi">Struktur Organisasi</a></li>
                                        <li><a href="#vision">Visi</a></li>
                                        <li><a href="#mission">Misi</a></li>
                                        <li><a href="#infoKalurahan">Info Kalurahan</a></li>
                                        <li><a href="#potensiKalurahan">Potensi Kalurahan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Unduh Aplikasi</h4>
                                    <img src="{{ asset('assets/img/app_btn2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Copy-Right -->
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy; 2021 E-Silam Team
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>
    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('/dist/js/modernizr-3.5.0.min.js') }}"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/dist/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('/dist/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/dist/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    {{-- <script src="./assets/js/gijgo.min.js"></script> --}}
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('/dist/js/wow.min.js') }}"></script>
    <script src="{{ asset('/dist/js/animated.headline.js') }}"></script>
    <script src="{{ asset('/dist/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('dist/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    {{-- <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script> --}}

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('/dist/js/plugins.js') }}"></script>
    <script src="{{ asset('dist/js/landing.js') }}"></script>

</body>

</html>
