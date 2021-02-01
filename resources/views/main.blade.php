<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kalurahan Jogotirto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/flaticons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/magnific-popup.css') }}">
    {{--
    <link href="{{ asset('dist/css/icons/font-awesome/css/fontawesome.css') }}" rel="stylesheet">
    --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('dist/css/themify-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/landingcss.css') }}">
    <style>
        .natural-resource-img img {
            width: 100%
        }

    </style>
</head>

<body>

    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> --}}
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
                                <a href="#"><img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="40px"></a>
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
                                        <li class="active"><a href="#"> Beranda</a></li>
                                        <li><a href="#profilKalurahan">Profil Kalurahan</a></li>
                                        <li><a href="#">Info Kalurahan</a></li>
                                        <li><a href="#">Potensi Kalurahan</a></li>
                                        {{-- <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="contact.html">Contact</a></li>
                                        --}}
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
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9" style="margin-top: -250px">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">E-Silam</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Sistem Informasi<br>Layanan
                                        Masyarakat</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur
                                        adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.
                                    </p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="#" class="btn radius-btn">Unduh Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="margin-top: -200px">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="{{ asset('assets/img/hero_right.png') }}" alt="" height="500px" style="margin:auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div
                    class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur
                                        adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.
                                    </p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html"
                                            class="btn radius-btn">Download</a>
                                        <!-- Video Btn -->
                                        <a data-animation="fadeInRight" data-delay="1.0s"
                                            class="popup-video video-btn ani-btn"
                                            href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                    data-delay="1s">
                                    <img src="{{ asset('assets/img/hero_right.png') }}" alt="">
            </div>
        </div>
        </div>
        </div>
        </div> --}}
        </div>
        </div>
        <!-- Slider Area End -->

        <!-- Best Features Start -->
        {{-- <section class="best-features-area section-padd4">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-8 col-lg-10">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-10 col-md-10">
                                <div class="section-tittle">
                                    <h2>Some of the best features Of Our App!</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Section caption -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Easy to Costomize</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Extreme Security</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Customer Support</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Creative Design</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shpe -->
            <div class="features-shpae d-none d-lg-block">
                <img src="assets/img/shape/best-features.png" alt="">
            </div>
        </section> --}}
        <!-- Best Features End -->
        <!-- Profil Kalurahan Start -->
        <section class="service-area sky-blue section-padding2" id="profilKalurahan">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center">
                            <h2>Profil Kalurahan</h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center active mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://st2.depositphotos.com/1502311/12020/v/600/depositphotos_120206862-stock-illustration-profile-picture-vector.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b> LURAH</b>
                                <p>Arum Setiya, S.Pd.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://st2.depositphotos.com/1502311/12020/v/600/depositphotos_120206862-stock-illustration-profile-picture-vector.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b>CARIK</b>
                                <p>Erwin Dwi Hastomo, S.E.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://www.insane.net.au/wp-content/uploads/2019/11/placeholder-profile-female.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b>Kepala urusan Danarta</b>
                                <p> Dra. Rini Prabaharsi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://www.insane.net.au/wp-content/uploads/2019/11/placeholder-profile-female.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b>Kepala Urusan Tata Laksana</b>
                                <p> Vitra Ikayanti, S.P</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://www.insane.net.au/wp-content/uploads/2019/11/placeholder-profile-female.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b>Kepala Urusan Pangripta</b>
                                <p> Nurkartika Rahmawati, S.Pd.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://st2.depositphotos.com/1502311/12020/v/600/depositphotos_120206862-stock-illustration-profile-picture-vector.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b>Kamituwo</b>
                                <p>Arif Aryono, S.Sos.I.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://st2.depositphotos.com/1502311/12020/v/600/depositphotos_120206862-stock-illustration-profile-picture-vector.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b>Jagabaya</b>
                                <p>Ali Rozikin, S.Pd.I.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="services-caption text-center mb-10" style="height: 350px">
                            <div class="feature-img">
                                <img class="img-fluid" src="https://st2.depositphotos.com/1502311/12020/v/600/depositphotos_120206862-stock-illustration-profile-picture-vector.jpg" width="150px" alt="">
                            </div>
                            <div>
                                <b>Ulu-Ulu</b>
                                <p>Maryadi, A.Md.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profil Kalurahan End -->
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
                    @foreach ($naturalResources as $key => $naturalResource)
                    <div class="col-lg-4 col-md-6">
                        <div class="card single-blogs mb-100">
                            <a href="view-info">
                                <div class="blog-img">
                                    <img src="{{ asset('uploads/images/natural_resource/' . $naturalResourceImage[$key]->image) }}" alt="image">
                                </div>
                                <div class="blog-cap card-body">
                                    <small class="text-secondary">{{ $naturalResourceDate }}</small>
                                    <h5 class="card-title">{{ $naturalResource->title }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="single-blogs mb-100">
                            <div class="blog-img">
                                <img src="{{ asset('uploads/images/natural_resource/lava-bantal.jpg') }}" alt="">
                </div>
                <div class="blog-cap">
                    <span class="color1">23 Dec, 2020</span>
                    <h4><a href="#">Addiction When Gambling Becomes</a></h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blogs mb-100">
                    <div class="blog-img">
                        <img src="{{ asset('uploads/images/natural_resource/gua-jepang.jpg') }}" alt="">
                    </div>
                    <div class="blog-cap">
                        <span class="color1">23 Dec, 2020</span>
                        <h4><a href="#">Addiction When Gambling Becomes</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blogs mb-100">
                    <div class="blog-img">
                        <img src="{{ asset('uploads/images/natural_resource/gua-jepang.jpg') }}" alt="">
                    </div>
                    <div class="blog-cap">
                        <span class="color1">23 Dec, 2020</span>
                        <h4><a href="#">Addiction When Gambling Becomes</a></h4>
                    </div>
                </div>
            </div> --}}
            </div>
            </div>
        </section>
        <!-- Applic App Start -->
        {{-- <div class="applic-apps section-padding2">
            <div class="container-fluid">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Applic Apps<br> Screenshot</h3>
                            <p>Lorem ipsum dolor sit amet, consecadipiscing elit, sed do eiusmod tempor incididunt ut
                                ore et dolore magna aliqua. Quis ipsum suspendisse gravida. Risus commodo viverra
                                maecenasan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class="app-active owl-carousel">
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/App1.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/App2.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/App3.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/App2.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/gallery/App1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Applic App End -->
        <!-- Best Pricing Start -->
        {{-- <section class="best-pricing pricing-padding"
            data-background="assets/img/gallery/best_pricingbg.jpg">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-tittle section-tittle2 text-center">
                            <h2>Choose Your Very Best Pricing Plan.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Best Pricing End -->
        <!-- Pricing Card Start -->
        {{-- <div class="pricing-card-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span>2 Years</span>
                                <h4>$05 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li>
                                </ul>
                                <a href="services.html" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card  text-center mb-30">
                            <div class="card-top">
                                <span>2 Years</span>
                                <h4>$05 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li>
                                </ul>
                                <a href="services.html" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span>2 Years</span>
                                <h4>$05 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li>
                                </ul>
                                <a href="services.html" class="btn card-btn1">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container mt-5 mb-3 agenda agenda-carousel">
            <div class="section-tittle text-center mb-80">
                <h2>Potensi Desa</h2>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($naturalResources as $index => $naturalResource)
                @foreach ($naturalResource->images as $image)
                <div class="item">
                    <div class="card">
                        <div class="blog-img">
                            <img src="{{ asset('uploads/images/natural_resource/'.$image->image) }}" alt="{{ $naturalResource->title }}">
                        </div>
                        <div class="card-body">
                            <h5>{{ $naturalResource->title }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
        <!-- Our Customer End -->
        <!-- Available App  Start-->
        {{-- <div class="available-app-area">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="app-caption">
                            <div class="section-tittle section-tittle3">
                                <h2>Our App Available For Any Device Download now</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fug.</p>
                                <div class="app-btn">
                                    <a href="#" class="app-btn1"><img src="assets/img/shape/app_btn1.png" alt=""></a>
                                    <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="app-img">
                            <img src="assets/img/shape/available-app.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="app-shape">
                <img src="assets/img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block">
                <img src="assets/img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block">
                <!-- <img src="assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
            </div>
        </div> --}}
        <!-- Available App End-->
        <!-- Say Something Start -->
        {{-- <div class="say-something-aera pt-90 pb-90 fix">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                        <div class="say-something-cap">
                            <h2>Say Hello To The Collaboration Hub.</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="say-btn">
                            <a href="#" class="btn radius-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="say-shape">
                <img src="assets/img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
                <img src="assets/img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
            </div>
        </div> --}}
        <!-- Say Something End -->

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
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus
                                            corrupti dignissimos explicabo et</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="ti-mobile mr-2 mt-1"></i>
                                        <p>08976521655</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navigasi</h4>
                                    <ul>
                                        <li><a href="#profilKalurahan">Profil Kalurahan</a></li>
                                        <li><a href="#">Info Kalurahan</a></li>
                                        <li><a href="#">Potensi Kalurahan</a></li>
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
            items: 4
            , loop: true
            , nav: true
            , margin: 10
            , autoplay: true
            , mergeFit: true
            , autoplayTimeout: 3000
            , loop: true
            , responsiveClass: true
            , navText: ['<', '>']
            , responsive: {
                0: {
                    items: 1
                , }
                , 700: {
                    items: 2
                , }
                , 1000: {
                    items: 4
                , }

            }
        })

    </script>
</body>

</html>
