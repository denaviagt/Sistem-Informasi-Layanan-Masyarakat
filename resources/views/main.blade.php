<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kalurahan Jogotirto</title>
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
                            <div class="logo d-flex">
                                <a href="#"><img src="{{ asset('assets/img/main-logo.png') }}" alt=""
                                        width="40px"></a>
                                <div class="ml-3">
                                    <span class="font-weight-bold">Kalurahan <br> Jogotirto</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="{{ url('main') }}"> Beranda</a></li>
                                        <li><a href="#strukturOrganisasi">Struktur Organisasi</a></li>
                                        <li><a href="#vision">Visi</a></li>
                                        <li><a href="#mission">Misi</a></li>
                                        <li><a href="#infoKalurahan">Info Kalurahan</a></li>
                                        <li><a href="#potensiKalurahan">Potensi Kalurahan</a></li>
                                        {{-- <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="contact.html">Contact</a></li> --}}
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

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9" style="margin-top: -250px">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">E-Silam</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Sistem Informasi<br>Layanan
                                        Masyarakat</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Media untuk mempermudah permohonan
                                        layanan masyarakat. Install sekarang juga melalui playstore!!
                                    </p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns mt-2">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="#"
                                            class="btn radius-btn">Unduh Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="margin-top: -200px">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="{{ asset('assets/img/mobile.png') }}" alt="" height="500px"
                                        style="margin:auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        {{-- Visi Banner Start --}}
        <div class="container section-padding" id="vision">
            <div class="section-tittle text-center">
                <h2>Visi Kalurahan Jogotirto</h2>
                <blockquote class="pl-5 pr-5 generic-blockquote">
                    <h4 style="line-height: 50px">
                        Terbentuknya generasi masyarakat desa Jogotirto berimtaq, terampil, cerdas, beremosi matang,
                        berkemampuan sosial tinggi, mandiri, berdasarkan akar budaya nasional, dengan lingkungan yang
                        sehat, mandiri, dan sejahtera untuk bersaing secara global.
                    </h4>
                </blockquote>
            </div>
        </div>
        {{-- Visi Banner End --}}

        {{-- Misi Banner Start --}}
        <div class="container section-padding" id="mission">
            <div class="section-tittle text-center">
                <h2>Misi Kalurahan Jogotirto</h2>
            </div>
            <div class="container">
                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($mission as $item)
                            @if ($loop->first)

                                <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}"
                                    class="active"></li>
                            @else
                                <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}"></li>
                            @endif
                        @endforeach

                    </ol>
                    <div class="carousel-inner" role="listbox" style="height: 300px">
                        @foreach ($mission as $item)
                            @if ($loop->first)
                                <div class="carousel-item active text-center p-5">
                                    <h3 class="p-5">{{ $item->mission }}</h3>
                                </div>
                            @else
                                <div class="carousel-item text-center p-5">
                                    <h3 class="p-5">{{ $item->mission }}</h3>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                        <i style="font-size: 20px" class="ti-angle-left text-primary"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                        <i style="font-size: 20px" class="ti-angle-right text-primary"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- Misi Banner End --}}

        <!-- Struktur Organisasi Start -->
        <div class="container section-padding" id="strukturOrganisasi">
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-lg-6">
                    <div class="section-tittle text-center">
                        <h2>Struktur Organisasi</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($apparatus as $item)
                    <div class="col-xl-11 col-lg-6 col-md-8 d-flex mx-auto card shadow-sm">
                        <div class="text-center active mb-10" style="height: 350px">
                            <div class="feature-img">
                                @if ($item->citizen->gender == 'male')
                                    <img class="img-fluid card-img-top"
                                        src="https://st2.depositphotos.com/1502311/12020/v/600/depositphotos_120206862-stock-illustration-profile-picture-vector.jpg"
                                        width="150px" alt="">
                                @else
                                    <img class="img-fluid card-img-top"
                                        src="https://www.insane.net.au/wp-content/uploads/2019/11/placeholder-profile-female.jpg"
                                        width="150px" alt="">
                                @endif
                            </div>
                            <div class="mt-3 card-body">
                                <b class="text-uppercase"> {{ $item->position }}</b>
                                <p>{{ $item->citizen->full_name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Info Kalurahan End -->
        <section class="blogs-area section-padding" id="infoKalurahan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Info Kalurahan</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($villageInfos as $key => $villageInfo)
                        <div class="col-lg-4 col-md-6">
                            <div class="card single-blogs mb-100">
                                <a href="{{ url('view-info/' . $villageInfo->id) }}">
                                    <div class="blog-img">
                                        @if ($villageInfo->thumbnail != null)
                                            <img src="{{ asset('uploads/images/village_info/' . $villageInfo->thumbnail) }}"
                                                alt="image">
                                        @endif
                                    </div>
                                    <div class="blog-cap card-body">
                                        <small
                                            class="text-secondary">{{ $villageInfo->date->isoFormat('dddd, D MMMM Y') }}</small>
                                        <h5 class="card-title">{{ $villageInfo->title }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <div class="container mt-5 mb-3 agenda agenda-carousel" id="potensiKalurahan">
            <div class="section-tittle text-center mb-80">
                <h2>Potensi Kalurahan</h2>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($naturalResources as $index => $naturalResource)
                    @foreach ($naturalResource->images as $image)
                        <div class="item">
                            <div class="card blog-img">
                                <div class="img-gradient">
                                    <img src="{{ asset('uploads/images/natural_resource/' . $image->image) }}"
                                        alt="{{ $naturalResource->title }}" class="card-img">
                                </div>
                                <div class="card-title card-img-overlay d-flex align-items-end text-white"
                                    style="bottom: 0">
                                    {{ $naturalResource->title }}
                                </div>
                            </div>
                            {{-- <div class="blog-img">
                                <img src="{{ asset('uploads/images/natural_resource/' . $image->image) }}"
                                    alt="{{ $naturalResource->title }}" />
                                <p> {{ $naturalResource->title }}
                                </p>
                            </div> --}}
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        <!-- Potensi Kalurahan End -->


    </main>
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
                                    <div class="d-flex">
                                        <i class="ti-mobile mr-2 mt-1"></i>
                                        <p>089514953073</p>
                                    </div>
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

    <script>
        $('.owl-carousel').owlCarousel({
            items: 4,
            loop: true,
            nav: true,
            margin: 10,
            autoplay: true,
            mergeFit: true,
            autoplayTimeout: 3000,
            loop: true,
            responsiveClass: true,
            navText: ['<', '>'],
            responsive: {
                0: {
                    items: 1,
                },
                700: {
                    items: 2,
                },
                1000: {
                    items: 4,
                }

            }
        })

    </script>
</body>

</html>
