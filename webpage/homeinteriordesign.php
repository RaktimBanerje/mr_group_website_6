<?php /* Template Name: HomeInteriorDesign */ ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Elegant Interior - Best Interior Designer Kolkata</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="Best Home interiors to suit every budget, with no compromise on quality.Make Your Home Look Amazing From Every Angle.High-quality raw materials & budget-friendly">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    

    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        body::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .modal-body::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .modal-body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        button {
            font-weight: 500 !important;
        }

        @font-face {
            font-family: 'Gilory';
            src: url('<?php echo esc_url( get_template_directory_uri() . '//home_interior_assets/fonts/gilory/Gilroy-Light.otf' )?>');
        }

        h1,
        h2 {
            font-size: 24px;
            line-height: 28px;
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji" !important;
            color: #41303e !important;
        }

        .banner {
            background-image: url('<?php echo esc_url( get_template_directory_uri() . '//home_interior_assets/images/banner2.jpg' )?>');
            background-size: cover;
            /* margin-top: 75px; */
            height: 380px;
        }

        .home-img {
            background-position: center;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper {
            width: 100%;
            margin: 20px auto;
        }

        .swiper-button-next,
        .swiper-button-prev {
            display: none;
            background-color: white;
            background-color: #ffc107;
            right: 10px;
            padding: 23px;
            border-radius: 100%;
            color: black !important;
            font-weight: bolder;
            fill: black !important;
            stroke: black !important;
            border: 1px solid black;
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 22px;
            font-weight: bolder;
        }

        .mySwiper {
            height: 410px;
        }

        .priceSwiper {
            height: 370px;
        }

        .impressiveHomeSwiper {
            height: 230px;
        }

        /* .homeSwiper {
            height: 765px;
        } */

        .testinomialSwiper {
            height: 370px;
        }

        .partner-wrapper {
            width: 100%;
            display: grid;
            place-items: center;
            position: relative;
            overflow: hidden;
        }

        .partner-track {
            display: flex;
            width: 100%;
            animation: scroll 10s linear infinite alternate;
        }

        .partner {
            height: 76px;
            width: 100px;
            display: flex;
            align-items: center;
        }
        .partner img {
            height: 76px;
            width: 76px;
            display: flex;
            align-items: center;
        }

        html {
            background-color: #f3f3f3;
        }

        .wrapper {
            max-width: 680px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .youtube {
            /* background-color: #000; */
            margin-bottom: 30px;
            position: relative;
            /* padding-top: 56.25%; */
            overflow: hidden;
            cursor: pointer;
        }

        .youtube img {
            width: 100%;
            top: -16.82%;
            left: 0;
            opacity: 0.7;
        }

        .youtube .play-button {
            width: 45px;
            height: 45px;
            background-color: #333;
            box-shadow: white;
            z-index: 1;
            opacity: 1;
            border-radius: 100px;
            background-color: #ffffff;
            margin-top: 54px;
        }

        .youtube .play-button:before {
            content: "";
            border-style: solid;
            border-width: 8px 0 8px 14px;
            border-color: transparent transparent transparent black;
            margin-left: 2px;
        }

        .youtube img,
        .youtube .play-button {
            cursor: pointer;
        }

        .youtube img,
        .youtube iframe,
        .youtube .play-button,
        .youtube .play-button:before {
            position: absolute;
        }

        .youtube .play-button,
        .youtube .play-button:before {
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
        }

        .youtube iframe {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-100px * 7));
            }
        }

        .whatsapp-button {
            position: fixed;
            bottom: 45%;
            right: 1px;
            z-index: 99;
            background-color: #25d366;
            border-radius: 8px 0px 0px 8px;
            color: #ffffff;
            text-decoration: none;
            width: 50px;
            height: 50px;
            font-size: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*-webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*-moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /* animation: effect 4s infinite ease-in; */
        }

        .call-button {
            position: fixed;
            bottom: 100px;
            left: 15px;
            z-index: 99;
            background-color: dodgerblue;
            border-radius: 50px;
            color: #ffffff;
            text-decoration: none;
            width: 50px;
            height: 50px;
            font-size: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*-webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*-moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            animation: effect 4s infinite ease-in;
        }

        .enquiry-button {
            position: fixed;
            bottom: 40px;
            left: 15px;
            z-index: 99;
            background-color: #ffc107;
            border-radius: 50px;
            color: #ffffff;
            text-decoration: none;
            width: 50px;
            height: 50px;
            font-size: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*-webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*-moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            animation: effect 4s infinite ease-in;
        }

        .whatsapp-button-bottom {
            z-index: 99;
            background-color: #25d366;
            border-radius: 50px;
            color: #ffffff;
            text-decoration: none;
            width: 40px;
            height: 40px;
            font-size: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*-webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*-moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
        }

        .call-button-bottom {
            z-index: 99;
            background-color: #e91e63;
            border-radius: 50px;
            color: #ffffff;
            text-decoration: none;
            width: 40px;
            height: 40px;
            font-size: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*-webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*-moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
        }

        .enquiry-button-bottom {
            z-index: 99;
            background-color: #ffc107;
            border-radius: 50px;
            color: #ffffff;
            text-decoration: none;
            width: 40px;
            height: 40px;
            font-size: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*-webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*-moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
            /*box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);*/
        }

        .impressive-home-card {
            box-shadow: 0 2px 8px rgba(0,0,0,.16);
            border-radius: 25px;
        }

        .impressive-home-image {
            filter: blur(2px);
        }

        .impressive-home-overlay {
            background: linear-gradient(180deg, transparent, black);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .home-overlay {
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: end;
            background: linear-gradient(180deg,transparent 80%,#000);
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            transition: box-shadow .2s ease-out;
        }

        .home-overlay:hover {
            box-shadow: 0 4px 15px 0 rgba(65,48,62,.7);
            transition: box-shadow .2s ease-out;
        }

        #accordion .card {
            margin-bottom: 15px;
        }

        #accordion .card-header h6 {
            font-weight: 500;
            font-size: 17px;
            line-height: 24px;
            cursor: pointer;
        }

        .avatar {
            min-height: 80px;
            min-width: 80px;
            background: #7a6e77;
            border-radius: 80px;
            font-size: 25px;
            line-height: 32px;
          }

        @keyframes effect {

            20%,
            100% {
                width: 50px;
                height: 50px;
                font-size: 30px;
            }

            0%,
            10% {
                width: 55px;
                height: 55px;
                font-size: 35px;
            }

            5% {
                width: 50px;
                height: 50px;
                font-size: 30px;
            }
        }

        /* Small evices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
           
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            
        }

        /* Medium devices (tablets, 768px and up) */
        @media (max-width: 768px) {
            .elegant_btn {
                width: 100% !important;
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            h1,
            h2 {
                font-size: 35px;
                line-height: 42px;
                font-weight: 700;
            }

            .banner {
                background-image: url('<?php echo esc_url( get_template_directory_uri() . '//home_interior_assets/images/banner1.jpg' )?>');
                min-height: 750px;
                /* margin-top: 90px; */
            }

            .banner .heading {
                font-size: 45px;
                line-height: 54px;
                font-weight: bolder;
            }

            .banner .subheading {
                font-size: 20px;
            }

            .partner {
                height: 200px;
                width: 200px;
                display: flex;
                align-items: center;
            }

            .partner img {
                height: 76px;
                width: 158px;
                display: flex;
                align-items: center;
            }

            .dropdown-toggle::after {
                content: none;
            }

            .dropdown-menu { 
                background-color: #d63e2d;
            }

            .dropdown-menu .dropdown-item {
                color: white;
                transition: 0.2s;
            }

            .dropdown-menu .dropdown-item:hover {
                color: white;
                background-color: #782118;
                transition: 0.2s;
            }

            .header .navbar-nav .nav-item {
                border-bottom: 1px solid #191919;
            }

            .header .navbar-nav .nav-item:hover {
                border-bottom: 1px solid #FECC2A;
            }

            .header .navbar-nav .nav-item .nav-link {
                color: white;
                transition: 0.2s;
                
            }

            .header .navbar-nav .nav-item .nav-link:hover {
                color: #FECC2A !important;
                transition: 0.2s;
                
            }

            @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-200px * 7));
            }
        }
        }

        /* X-Large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {}

        /* XX-Large devices (larger desktops, 1400px and up) */
        @media (min-width: 1400px) {}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #191919;">
        <!-- Brand -->
        <a class="" href="https://www.elegantinterior.info/">
            <img src="https://www.elegantinterior.info/wp-content/uploads/2020/11/logo.png" style="height: 70px;">
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="header collapse navbar-collapse justify-content-end d-none" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.elegantinterior.info/" style="font-weight: 700 !important;">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="https://www.elegantinterior.info/about/" id="navbardrop" data-toggle="dropdown" style="font-weight: 700 !important;">ABOUT US</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://www.elegantinterior.info/about/team/">OUR TEAM</a>
                        <a class="dropdown-item" href="https://www.elegantinterior.info/about/our-mission/">MISSION & VISSION</a>
                        <a class="dropdown-item" href="https://www.elegantinterior.info/terms-and-conditions/">TERMS & CONDITIONS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.elegantinterior.info/projects/" style="font-weight: 700 !important;">OUR WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.elegantinterior.info/elegant/FAQ/#" style="font-weight: 700 !important;">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.elegantinterior.info/about/our-showroom/" style="font-weight: 700 !important;">OUR SHOWROOM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.elegantinterior.info/video-gallery/" style="font-weight: 700 !important;">VIDEO GALLERY</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="https://www.elegantinterior.info/interiors/" id="navbardrop" data-toggle="dropdown" style="font-weight: 700 !important;">INTERIOR</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://www.elegantinterior.info/home-interior-design/">Home Interior Design</a>
                        <a class="dropdown-item" href="https://www.elegantinterior.info/flat-interior-design/">Flat Interior Design</a>
                        <a class="dropdown-item" href="https://www.elegantinterior.info/penthouse-interior-design/">Penthouse Interior Design</a>
                        <a class="dropdown-item" href="https://www.elegantinterior.info/kitchen-interior-design/">Kitchen Interior Design</a>
                        <a class="dropdown-item" href="https://www.elegantinterior.info/duplex-interior/">Duplex Interior</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.elegantinterior.info/blog/" style="font-weight: 700 !important;">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.elegantinterior.info/contact/" style="font-weight: 700 !important;">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <div class="row pt-2 pt-md-5">
                <div class="col-12 col-md-6 mb-5 mb-md-0 d-none d-md-block">
                    <h1 class="heading"><span style="color: white;">Engage With The Best</span> <span
                            style="color: rgb(254, 204, 42);">Home Interior Designer In Kolkata</span></h1>
                    <h6 class="subheading" style="color: white !important;">Experience unmatched quality & timely delivery with
                        Eleganr Interior</h6>
                </div>
                <div class="col-12 col-md-6 mb-5 mb-md-0 d-block d-md-none">
                    <h3 class="heading"><span style="color: white;">Engage With The Best</span> <span
                            style="color: rgb(254, 204, 42);">Home Interior Designer In Kolkata</span></h3>
                    <h6 class="subheading" style="color: white !important;">Experience unmatched quality & timely delivery with
                        Eleganr Interior</h6>
                </div>
                <div class="col-12 col-md-1"></div>

                <div class="d-block d-md-none col-12 col-md-5 mt-5">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100 mt-5"
                        style="border-radius: 100px; font-weight: bold; height: 50px;">GET FREE QUOTE</button>
                </div>
                <div class="d-none d-md-block col-md-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h3 class="text-center">Designs for Every Budget</h3>

                            <form class="pt-4" action="https://www.elegantinterior.info/landing-page/home-interiors/handler.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" required placeholder="Name"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required placeholder="Email ID"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" required placeholder="Phone No." pattern="^\d{10}$"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="message" required placeholder="Message"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group text-center py-2">
                                    <button class="btn btn-warning w-100"
                                        style="border-radius: 100px; font-weight: bold; height: 50px;">GET FREE
                                        QUOTE</button>
                                </div>
                                <p class="text-left">By submitting this form, you agree to the privacy policy & terms and conditions</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content 1 -->
    <section class="container-fluid">
        <div class="row justify-content-center mt-4 mt-md-0 px-3" style="background-color: rgb(245 245 245);">
            <div class="col-12 col-md-10 text-center" style="padding: 60px 0px 60px 0px;">
                <h1 class="text-center mb-4 d-none d-md-block">Elegant Design To Make Your House A Home</h1>
                <h3 class="text-left mb-4 d-block d-md-none">Elegant Design To Make Your House A Home</h3>
                <p class="text-center mb-4 px-1 d-none d-md-block">Improve both the appearance and functionality of your home with an ELEGANT touch. A divine combination of art and technology gives flawless look to your home, which makes you delighted every time you stare at your home.</p>
                <p class="text-left mb-4 px-1 d-block d-md-none">Improve both the appearance and functionality of your home with an ELEGANT touch. A divine combination of art and technology gives flawless look to your home, which makes you delighted every time you stare at your home.</p>
                <button data-toggle="modal" data-target="#myModal1" data-backdrop="static" data-keyboard="false"
                    class="btn btn-warning elegant_btn" style="padding: 12px 48px 12px 48px; border-radius: 100px;">BOOK FREE
                    CONSULTATION</button>
            </div>
        </div>
    </section>

    <!-- New Home -->
    <section>
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">Looking For Best Home Interior Design In Kolkata?</h2>
                </div>
                <div class="col-12 col-md-9">
                    <p class="pt-md-3" style="color: #41303e; font-size: 18px;">Let Elegant help you to make your home brand new. The expert and professional interior designer of Elegant Interior can help you with that</p>
                </div>
                <div class="col-md-3 d-none d-md-block" style="text-align: end;">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET FREE
                        QUOTE</button>
                </div>
            </div>

            <div #swiperRef="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="card swiper-slide border-0">
                        <img class="card-img-top" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/bought-home-3.jpg">
                        <div class="card-body">
                            <h5 class="text-left">We understand
                            </h5>
                            <p class="text-left" style="font-size: 16px;">We give the effort to understand your preferences, requirement, and lifestyle before starting our work
                        </div>
                    </div>
                    <div class="card swiper-slide border-0">
                        <img class="card-img-top" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/bought-home-2.jpg">
                        <div class="card-body">
                            <h5 class="text-left">We customized
                            </h5>
                            <p class="text-left" style="font-size: 16px;">We customized all the designs according to your preference for kitchen, bedroom, living room, and others
                            </p>
                        </div>
                    </div>
                    <div class="card swiper-slide border-0">
                        <img class="card-img-top" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/bought-home-1.jpg">
                        <div class="card-body">
                            <h5 class="text-left">We handover 
                            </h5>
                            <p class="text-left" style="font-size: 16px;">We handover the site within 30 days so that you don’t have to wait longer 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Homes For Every Budget -->
    <section style="background-color: #f5f4f5;">
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">Enjoy The Best Home Interior Design In Kolkata</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p class="pt-md-3" style="color: #41303e; font-size: 18px;">Our interior designers work with you keeping in mind your requirements and budget</p>
                </div>
                <div class="col-md-3 d-none d-md-block" style="text-align: end;">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET FREE QUOTE</button>
                </div>
            </div>

            <div #swiperRef="" class="swiper homeSwiper">
                <div class="swiper-wrapper" style="height: auto;">
                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/3-bhk-new.jpg">
                        <div class="card-img-overlay home-overlay">
                            <h4 class="text-white mb-0">3BHK</h4>
                        </div>
                    </div>
                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/4-bhk-new.jpg">
                        <div class="card-img-overlay home-overlay">
                            <h4 class="text-white mb-0">4BHK</h4>
                        </div>
                    </div>
                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/living-room-new.jpg">
                        <div class="card-img-overlay home-overlay">
                            <h4 class="text-white mb-0">Living Room</h4>
                        </div>
                    </div>
                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/2-bhk-new.jpg">
                        <div class="card-img-overlay home-overlay">
                            <h4 class="text-white mb-0">2BHK</h4>
                        </div>
                    </div>
                     <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/1-bhk-new.jpg">
                        <div class="card-img-overlay home-overlay">
                            <h4 class="text-white mb-0">1BHK</h4>
                        </div>
                    </div>
                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/duplex-new.jpg">
                        <div class="card-img-overlay home-overlay">
                            <h4 class="text-white mb-0">Duplex</h4>
                        </div>
                    </div>
                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/living-room.jpg">
                        <div class="card-img-overlay home-overlay">
                            <h4 class="text-white mb-0">Living Room</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Price Estimator -->
    <!-- <section class="container">
        <div style="padding: 40px 0px 20px 0px;">

            <h2 class="text-center" style="color: #41303e; font-weight: bold;">Best Home Interior</h2>
            <p class="text-center" style="color: #41303e; font-size: 18px;">Calculate the approximate cost of doing up your interiors.</p>

            <div #swiperRef="" class="swiper priceSwiper">
                <div class="swiper-wrapper">
                    <div class="card swiper-slide shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row justify-content-left mb-4">
                                <div class="col-6 text-start">
                                    <img src="https://images.livspace-cdn.com/w:80/h:80/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/in/lp-estimators-carousel-1675788004-IGLbz/full-home-interior-1-1675788036-JKqzI.png">
                                </div>
                                <div class="col-6 text-right">
                                    <img src="https://images.livspace-cdn.com/w:80/h:80/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/common/price-calculator-widget-1675953718-l8ouH/icons-1675953730-fCI3k/calculator-1675953943-YLUej.png">
                                </div>
                            </div>
                            <div class="row justify-content-left">
                                <h4 class="text-left">Full Home</h4>
                                <p class="text-left">Get an approximate costing for your full home interiors.</p>
                                <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                                    class="btn btn-warning mt-4" style="padding: 12px 48px 12px 48px; border-radius: 100px; width: 100%;">GET FREE
                                    QUOTE</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row justify-content-left mb-4">
                                <div class="col-6 text-start">
                                    <img src="https://images.livspace-cdn.com/w:80/h:80/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/in/lp-estimators-carousel-1675788004-IGLbz/full-home-interior-1-1675788036-JKqzI.png">
                                </div>
                                <div class="col-6 text-right">
                                    <img src="https://images.livspace-cdn.com/w:80/h:80/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/common/price-calculator-widget-1675953718-l8ouH/icons-1675953730-fCI3k/calculator-1675953943-YLUej.png">
                                </div>
                            </div>
                            <div class="row justify-content-left">
                                <h4 class="text-left">Full Home</h4>
                                <p class="text-left">Get an approximate costing for your full home interiors.</p>
                                <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                                    class="btn btn-warning mt-4" style="padding: 12px 48px 12px 48px; border-radius: 100px; width: 100%;">GET FREE
                                    QUOTE</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row justify-content-left mb-4">
                                <div class="col-6 text-start">
                                    <img src="https://images.livspace-cdn.com/w:80/h:80/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/in/lp-estimators-carousel-1675788004-IGLbz/full-home-interior-1-1675788036-JKqzI.png">
                                </div>
                                <div class="col-6 text-right">
                                    <img src="https://images.livspace-cdn.com/w:80/h:80/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/common/price-calculator-widget-1675953718-l8ouH/icons-1675953730-fCI3k/calculator-1675953943-YLUej.png">
                                </div>
                            </div>
                            <div class="row justify-content-left">
                                <h4 class="text-left">Full Home</h4>
                                <p class="text-left">Get an approximate costing for your full home interiors.</p>
                                <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                                    class="btn btn-warning mt-4" style="padding: 12px 48px 12px 48px; border-radius: 100px; width: 100%;">GET FREE
                                    QUOTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
 -->
    <!-- Testimonials -->
    <section style="background-color: #F5F4F5;">
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">Elegant Interior Reviews</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-12">
                    <p class="pt-md-3" style="color: #41303e; font-size: 18px;">For a team that aims at making customers feel at home, these reviews motivate us to provide top-quality experiences to our customers every day.</p>
                </div>
                <div class="col-md-4 d-none d-md-block px-md-4" style="text-align: end;">
                    <div class="card shadow-lg p-3 bg-white rounded" style="border-radius: 20px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/google-icon.avif">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-center">Average ratings</h6> 
                                    <h4 class="text-left d-inline-block mb-0">4.6</h4> 
                                    <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                    <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                    <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                    <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                    <i class="fas fa-star-half" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div #swiperRef="" class="swiper testimonialSwiper">
                <div class="swiper-wrapper" style="height: auto;">
                    <div class="card swiper-slide">
                       <div class="card-body ">
                        <div class="row mb-4">
                            <div class="col-3">
                                <div class="avatar d-flex justify-content-center align-items-center">
                                    <h3 class="text-white" src="avatar.png" alt="Avatar">DP</h3>
                                </div>
                            </div>
                            <div class="col-9">
                                <h6 class="text-center">Dipanwita Paul</h6> 
                                <h4 class="text-left d-inline-block mb-0">5.0</h4> 
                                <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                            </div>
                        </div>
                        <p class="text-left">To create my modern bungalow interior design kitchen finished by Machine made product with fine finish, I contacted Elegant Interior. Because of their reviews, I hire them....</p>
                        <a class="text-danger" style="font-weight: bold;" href="https://g.co/kgs/x3fNFA">Read More <i class="fas fa-external-link-alt"></i></a>
                    </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-body ">
                         <div class="row mb-4">
                             <div class="col-3">
                                 <div class="avatar d-flex justify-content-center align-items-center">
                                     <h3 class="text-white" src="avatar.png" alt="Avatar">SB</h3>
                                 </div>
                             </div>
                             <div class="col-9">
                                 <h6 class="text-center">Suman Biswas</h6> 
                                 <h4 class="text-left d-inline-block mb-0">5.0</h4> 
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                             </div>
                         </div>
                         <p class="text-left">Elegant’s crew completes all interior decoration. Thank you to the entire team, and congratulations on such a novel idea for appliances and design. They also provide ...</p>
                         <a class="text-danger" style="font-weight: bold;" href="https://g.co/kgs/v4ZSWp">Read More <i class="fas fa-external-link-alt"></i></a>
                     </div>
                     </div>
                     <div class="card swiper-slide">
                        <div class="card-body ">
                         <div class="row mb-4">
                             <div class="col-3">
                                 <div class="avatar d-flex justify-content-center align-items-center">
                                     <h3 class="text-white" src="avatar.png" alt="Avatar">SS</h3>
                                 </div>
                             </div>
                             <div class="col-9">
                                 <h6 class="text-center">Sourav Sarkar</h6> 
                                 <h4 class="text-left d-inline-block mb-0">5.0</h4> 
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                             </div>
                         </div>
                         <p class="text-left">Elegant Interiors is the top interior design company, offering excellent customised work at an affordable price, excellent teamwork, value for money, and a commitment...</p>
                         <a class="text-danger" style="font-weight: bold;" href="https://g.co/kgs/7bpY26">Read More <i class="fas fa-external-link-alt"></i></a>
                     </div>
                     </div>
                     <div class="card swiper-slide">
                        <div class="card-body ">
                         <div class="row mb-4">
                             <div class="col-3">
                                 <div class="avatar d-flex justify-content-center align-items-center">
                                     <h3 class="text-white" src="avatar.png" alt="Avatar">TG</h3>
                                 </div>
                             </div>
                             <div class="col-9">
                                 <h6 class="text-center">Tuli Ghosh</h6> 
                                 <h4 class="text-left d-inline-block mb-0">5.0</h4> 
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                             </div>
                         </div>
                         <p class="text-left">With all Hettich-branded hardware, they have the best staff and produce high-quality work that can be recommended to everyone. To create kitchen interior design, I contacted ...</p>
                         <a class="text-danger" style="font-weight: bold;" href="https://g.co/kgs/x3fNFA">Read More <i class="fas fa-external-link-alt"></i></a>
                     </div>
                     </div>
                     <div class="card swiper-slide">
                        <div class="card-body ">
                         <div class="row mb-4">
                             <div class="col-3">
                                 <div class="avatar d-flex justify-content-center align-items-center">
                                     <h3 class="text-white" src="avatar.png" alt="Avatar">AB</h3>
                                 </div>
                             </div>
                             <div class="col-9">
                                 <h6 class="text-center">Ajay Bose</h6> 
                                 <h4 class="text-left d-inline-block mb-0">5.0</h4> 
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                             </div>
                         </div>
                         <p class="text-left">I'm happy to say that working with Elegant Interiors has been an amazing experience. I am quite happy with the services they gave, and I would strongly advise others to get their ...</p>
                         <a class="text-danger" style="font-weight: bold;" href="https://g.co/kgs/cdCgPX">Read More <i class="fas fa-external-link-alt"></i></a>
                     </div>
                     </div>
                     <div class="card swiper-slide">
                        <div class="card-body ">
                         <div class="row mb-4">
                             <div class="col-3">
                                 <div class="avatar d-flex justify-content-center align-items-center">
                                     <h3 class="text-white" src="avatar.png" alt="Avatar">BR</h3>
                                 </div>
                             </div>
                             <div class="col-9">
                                 <h6 class="text-center">Bipasha Roy</h6> 
                                 <h4 class="text-left d-inline-block mb-0">5.0</h4> 
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                             </div>
                         </div>
                         <p class="text-left">Elegant were frequently referred to be Kolkata's "best interior designers." I, therefore, decided to select them for my best kitchen interior design, and they delivered.They have ...</p>
                         <a class="text-danger" style="font-weight: bold;" href="https://g.co/kgs/p2J2N2">Read More <i class="fas fa-external-link-alt"></i></a>
                     </div>
                     </div>
                     <div class="card swiper-slide">
                        <div class="card-body ">
                         <div class="row mb-4">
                             <div class="col-3">
                                 <div class="avatar d-flex justify-content-center align-items-center">
                                     <h3 class="text-white" src="avatar.png" alt="Avatar">KN</h3>
                                 </div>
                             </div>
                             <div class="col-9">
                                 <h6 class="text-center">Kallol Neogi</h6> 
                                 <h4 class="text-left d-inline-block mb-0">5.0</h4> 
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                                 <i class="fas fa-star" style="color: rgb(255, 187, 51); font-size: 20px; line-height: 20px;"></i>
                             </div>
                         </div>
                         <p class="text-left">The pricing is fair, and the best part is that there are no additional fees until you veer off course or choose a big redesign. As Elegant is the top interior designer in Kolkata ...</p>
                         <a class="text-danger" style="font-weight: bold;" href="https://g.co/kgs/hqtbTP">Read More <i class="fas fa-external-link-alt"></i></a>
                     </div>
                     </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Reason to Love-->
    <section>
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">Reason To Choose Us Over Others</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-4 text-center mt-1 mb-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row justify-content-center">
                                <img class="d-md-block d-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon1.png">
                                <img class="d-block d-md-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon1.png">
                            </div>
                            <div class="text-center mt-2">
                                <h6>30 years of warranty*</h6>
                                <p>Because we trust the quality of our product</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 text-center mt-1 mb-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row justify-content-center">
                                <img class="d-md-block d-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon2.png">
                                <img class="d-block d-md-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon2.png">
                            </div>
                            <div class="text-center mt-2">
                                <h6>30 days delivery</h6>
                                <p>We don't like to make our customers wait longer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 text-center mt-1 mb-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row justify-content-center">
                                <img class="d-md-block d-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon3.png">
                                <img class="d-block d-md-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon3.png">
                            </div>
                            <div class="text-center mt-2">
                                <h6>Customized design</h6>
                                <p>Your choice matters to us</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 text-center mt-1 mb-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row justify-content-center">
                                <img class="d-md-block d-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon4.png">
                                <img class="d-block d-md-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon4.png">
                            </div>
                            <div class="text-center mt-2">
                                <h6>40000+ satisfied customers</h6>
                                <p>Customer satisfaction is our first priority </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 text-center mt-1 mb-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row justify-content-center">
                                <img class="d-md-block d-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon5.png">
                                <img class="d-block d-md-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon5.png">
                            </div>
                            <div class="text-center mt-2">
                                <h6>High-quality material</h6>
                                <p>We do not compromise on quality </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 text-center mt-1 mb-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row justify-content-center">
                                <img class="d-md-block d-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon6.png">
                                <img class="d-block d-md-none"  style="height: 100px; width: 100px;" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/icon6.png">
                            </div>
                            <div class="text-center mt-2">
                                <h6>Budget-friendly</h6>
                                <p>We have something for every budget</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Service -->
    <section style="background-color: #F5F4F5;">
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">The best Home Interior Design In Kolkata In Just One Click Away From you</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p class="pt-md-3" style="color: #41303e; font-size: 18px;">Let our expert designers help you design your dream home. Just tell us your choice, and we will take care of the rest!!!</p>
                </div>
                <div class="col-md-3 d-none d-md-block" style="text-align: end;">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning" style="padding: 12px 48px 12px 48px; border-radius: 100px;">VIEW ALL</button>
                </div>
            </div>

            <div #swiperRef="" class="swiper testimonialSwiper">
                <div class="swiper-wrapper" style="height: auto;">
                    <div class="card swiper-slide border-0">
                        <img class="card-img-top" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/modular-kitchen.jpg">
                        <div class="card-body w-100">
                            <h5 class="text-left">Modular Kitchens
                            </h5>
                            <p class="text-left text-danger mb-0" style="font-size: 16px;"><a href="https://elegantinterior.info/modular_kitchen" class="text-danger" style="text-decoration:none;">Explore </a><i class="fas fa-long-arrow-alt-right"></i></p>
                        </div>
                    </div>
                    <div class="card swiper-slide border-0">
                        <img class="card-img-top" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/office.jpg">
                        <div class="card-body w-100">
                            <h5 class="text-left">Office
                            </h5>
                            <p class="text-left text-danger mb-0" style="font-size: 16px;"><a href="https://elegantinterior.info" class="text-danger" style="text-decoration:none;">Explore </a> <i class="fas fa-long-arrow-alt-right"></i></p>
                        </div>
                    </div>
                    <div class="card swiper-slide border-0">
                        <img class="card-img-top" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/penthouse.jpg">
                        <div class="card-body w-100">
                            <h5 class="text-left">Penthouse
                            </h5>
                            <p class="text-left text-danger mb-0" style="font-size: 16px;"><a href="https://www.elegantinterior.info/penthouse-interior-design" class="text-danger" style="text-decoration:none;">Explore </a> <i class="fas fa-long-arrow-alt-right"></i></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>


            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Impressive Home -->
    <section>
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">Wants to know about our Impressive Previous Work?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p class="pt-md-3" style="color: #41303e; font-size: 18px;">Yes! We are the expert on making a beautiful house even better for your living. Let us be the reason for your happiness.</p>
                </div>
                <div class="col-md-3 d-none d-md-block" style="text-align: end;">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET STARTED</button>
                </div>
            </div>

            <div #swiperRef="" class="swiper impressiveHomeSwiper">
                <div class="swiper-wrapper" style="height: auto;">
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/urbana.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Urbana</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/south-city.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">South-City</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/ranchi.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Ranchi</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/one-rajarhat.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">One-Rajarhat</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/elita-garden-vista.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Elite Garden Vista</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/ozone.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Ozone</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/siddha-suburbia.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Siddha Suburbia</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/emami-city.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Emami City</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/swan-court.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Swan Court</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/siddha-galaxia.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Siddha Galaxia</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/tata-avinida.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Tata Avinida</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/uttalika.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Uttalika</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/merlin-the-one.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Merlin The One</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/madgul-antara.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Madgul Antara</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                    <div class="card swiper-slide impressive-home-card">
                        <img class="card-img-top impressive-home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/dream-one.jpg">
                        <div class="card-img-overlay impressive-home-overlay">
                            <h4 class="text-white">Dream One</h4>
                            <h6 class="text-white">Kolkata</h6>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-button-next"></div> -->
                <div class="swiper-pagination"></div>
            </div>

            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section>
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">Browse through our magazine</h2>
                </div>
                <div class="col-12 col-md-9">
                    <p class="pt-md-3" style="color: #41303e; font-size: 18px;">Get amazing tips and inspirations to choose from. Pick the ones you love and tell our interior designer in Kolkata</p>
                </div>
                <div class="col-md-3 d-none d-md-block" style="text-align: end;">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET FREE
                        QUOTE</button>
                </div>
            </div>

            <div #swiperRef="" class="swiper mySwiper">
                <div class="swiper-wrapper">

                <?php

                    /*pass your search string here example like this ( 's'=>'test' ) */
                    $args=array('order'=> 'DESC', 'orderby' => 'date', 'posts_per_page'=>get_option('posts_per_page'));

                    $query=new WP_Query($args);

                    if( $query->have_posts()): 

                    while( $query->have_posts()): $query->the_post(); { ?>
                        <div class="card swiper-slide border-0">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large' ); ?>
                            <img class="card-img-top" src="<?php echo $image[0]; ?>" style="height: 200px;">
                            <div class="card-body px-0 w-100">
                                <h5 class="text-left" style="text-align: left;"><a href="<?php the_permalink(); ?>" class="stretched-link text-dark" style="text-decoration: none !important;"><?php the_title(); ?></a></h5>
                                <p class="text-left text-muted" style="font-size: 16px;"><i>| <?php echo get_the_date(); ?></i></p>
                            </div>
                        </div>
                    <?php }
                    endwhile; 
                    else:
                    endif;
                ?>  
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Meet Your Designer -->
    <section>
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2 class="text-left" style="color: #41303e; font-weight: bold !important;">Home Interiors Kolkata</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <p class="pt-md-3" style="color: #41303e; font-size: 18px;">Get Free Consultation to see what interiors suit your home the best</p>
                </div>
                <div class="col-md-4 d-none d-md-block" style="text-align: end;">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning" style="padding: 12px 48px 12px 48px; border-radius: 100px;">MEET YOUR DESIGNER</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior4.jpg" alt="Fourth slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row mt-3 mt-md-0">
                        <div class="col-md-9">
                            <p style="font-weight: bold;">Address</p>
                            <p>BA-14, Shantipally, Naskarhat, East Kolkata Twp, Kolkata, West Bengal 700107</p>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>  
                    
                    <div class="row ">
                        <div class="col-md-9">
                            <p style="font-weight: bold;">Timings</p>
                            <p>Monday to Saturday | 11 AM - 8 PM</p>
                        </div>
                    </div>
                    
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-outline-danger" style="padding: 12px 48px 12px 48px; border-radius: 100px;">EXPLORE MORE <i class="fas fa-angle-right"></i></button>
                </div>
            </div>

            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-12 text-center">
                    <button data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"
                        class="btn btn-warning w-100 mt-3 mt-md-0" style="padding: 12px 48px 12px 48px; border-radius: 100px;">GET
                        FREE
                        QUOTE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section>
        <div class="container px-3 px-md-0" style="padding: 40px 0px 20px 0px;">
            <h2 class="text-left mb-4" style="color: #41303e; font-weight: bold !important;">FAQs About Home Interior Design in Kolkata</h2>

            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-link" data-toggle="collapse" href="#collapseOne">
                            1. Is the quality of the home Interior design of your company reliable?
                        </h6>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                             The elegant Interior provides the best quality home interior design in Kolkata. We use marine grade ply(No Compress Wood)  for all the interior work, which is lightweight, strong, and defect-free. As a result, all the design becomes long-lasting. Besides, we use German machines for flawless finishing of the work, which enhances the appearance of your home
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-link" data-toggle="collapse" href="#collapseThree">
                            2. Can I avail of your service if I do not have a high budget?
                        </h6>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            We understand that each people have a different budget for interior design. Hence, we provide all types of services and products, which can fit into your budget. When you explain your requirement and budget to our expert interior designer, they will make your design according to that.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="card-link" data-toggle="collapse" href="#collapseFour">
                            3. Do you provide any warranty?
                        </h6>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Yes! We provide high-quality material, which lasts for a very long time, and we give 30 years of warranty for our products. As customer satisfaction is our top priority we do not compromise on that. 
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="card-link" data-toggle="collapse" href="#collapseFive">
                            4. How many days does it take to complete the project?
                        </h6>
                    </div>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Elegant has a "30 days delivery" policy. We hand over the site within 30 days of your booking day. However, the time of completing a project also depends on the amount of work, your requirement, the size of your home, etc.T&C Apply
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="card-link" data-toggle="collapse" href="#collapseSix">
                            5. Will you modify the design if I do not like something after completion?
                        </h6>
                    </div>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Generally, most of our interior design work does not need modification, as clients are very satisfied with our work. However, in case you need any modification after completing the work, our designer, supervisor, and worker will help you with that. .
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="card-link" data-toggle="collapse" href="#collapseSeven">
                            6. What is the minimum price I have to spend on interior design?
                        </h6>
                    </div>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            There is no specific price package for interior design work in this top interior design company in Kolkata. The budget or expenses completely depend on the site, your requirement, and the number of furniture you need. Besides, we can also modify the design according to your budget if it exceeds your budget.  
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="card-link" data-toggle="collapse" href="#collapseEight">
                            7. Are we allowed to customize the design or do we have to accept your suggested design as it is?
                        </h6>
                    </div>
                    <div id="collapseEight" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            We are the best-customized interior design company in Kolkata. We have 40000+ happy and satisfied customers who connected with us to make their dream homes. Our designer will make sure to fulfill your entire requirement while working
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content 2 -->
    <section class="container-fluid" style="background-color: rgb(245 245 245);  padding: 60px 0px 60px 0px;">
        <div class="container">
            <div class="row justify-content-center mt-4 mt-md-0 mb-3">
                <div class="col-md-6 d-flex align-items-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior5.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior6.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior7.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior8.jpg" alt="Fourth slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Enjoy The best Home Interior Design In Kolkata</h5>
                    <p>The best way to get the most out of top home interior designer in kolkata is to be upfront about your needs and expectations. Be honest! Don’t hire someone specialising in bohemian design if you want a minimalist space. The better you communicate your preferences, the more likely it is that everything will run smoothly for you.</p>
                    <h5>Elegant Design To Make Your House A Home</h5>
                    <p>Improve both the appearance and functionality of your home with an ELEGANT touch. A divine combination of art and technology gives flawless look to your home, which makes you delighted every time you stare at your home.</p>
                </div>
            </div>
            <!-- <h5>Elegant Design To Make Your House A Home</h5> -->
            <p>The elegant interior is one of the top interior design companies in Kolkata. We are providing services to the customers for the past 25 years and we have upgraded our service over time.</p>
            <p>A unique blend of custom and innovative design with high-quality marine grade ply helped us to create a long list of satisfied and happy customers.</p>
        </div>
    </section>

    <!-- Contact Us -->
    <section>
        <div class="container-fluid px-3 px-md-0" style="padding: 60px 0px 60px 0px; background-color: #3656772e;">
            <div class="row justify-content-center">
                <div class="col-md-12 d-block d-md-none">
                    <h2 class="text-left" style="font-weight: bold !important; color: #41303e;">Connect with us</h2>
                    <p class="text-left" style="color: #41303e;">Reach out on WhatsApp or give us a call for the best
                        home design experience.</p>
                </div>
                <div class="col-md-12 d-md-block d-none">
                    <h2 class="text-center w-100" style="font-weight: bold !important; color: #41303e;">Connect with us</h2>
                    <p class="text-center" style="color: #41303e;">Reach out on WhatsApp or give us a call for the best
                        home design experience.</p>
                </div>
                <div class="col-12" style="text-align: center;">
                    <a href="tel:9830082872">
                        <button
                            class="btn btn-light"
                            style="background-color: #365677; padding: 12px 32px; border-radius: 100px; color: white; font-weight: bold;">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/call.svg">
                            <span class="px-2" style="font-size: 14px;">CALL NOW</span>
                        </button>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=9830082872">
                        <button
                            class="btn btn-light mt-1 mt-md-0"
                            style="background-color: #365677; padding: 12px 32px; border-radius: 100px; color: white; font-weight: bold;">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/wp.svg">
                            <span class="px-2" style="font-size: 14px;">WHATSAPP</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content 3 -->
    <section class="container-fluid" style="background-color: rgb(245 245 245);  padding: 60px 0px 60px 0px;">
        <div class="container">
            <div class="row justify-content-center mt-4 mt-md-0 px-3">
                <div class=" col-md-12">
                    <h5 class="mb-4">The Process of How We Work</h5>
                    <!-- <p>Improve both the appearance and functionality of your home with an ELEGANT touch. A divine combination of art and technology gives flawless look to your home, which makes you delighted every time you stare at your home.</p> -->
                    <ul>
                        <li class="mb-2">The first step is conduction of the measurement and requirement meeting to understand the prerequisite</li>
                        <li class="mb-2">The second step involved the development of a 2D layout as per requirements and providing budget estimation</li>
                        <li class="mb-2">In the third step, a physical meeting is scheduled in the office as per the convinced time the client?</li>
                        <li class="mb-2">A 10% token advance is needed after the client finalizes the interior design plan?</li>
                        <li class="mb-2">The customized 3D design is completed along with proper finishing with the help of a high-quality German machine within 30 days of booking.</li>
                        <li class="mb-2">Once the project is completed, the site and warranty handover to the owner is done?</li>
                        <li class="mb-2">Quality checks and modifications are done according to the client's needs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Dream Home -->
    <section>
        <div class="row justify-content-center px-2" style="background-color: #573854;">
            <div class="col-12 col-md-6 text-center px-3" style="padding: 60px 0px 60px 0px;">

                <h1 class="text-center mb-4 d-none d-md-block px-2">
                    <span style="color: rgb(254 204 42); font-weight: bolder;">Your dream home</span>
                    <span style="color: white; font-weight: bolder;">is just a click away</span>
                </h1>
                <p class="text-center d-none d-md-block  mb-4 px-1" style="color: white !important;">Book a free consultation with
                    our interior designers.</p>

                <h4 class="text-left mb-4 d-block d-md-none px-2">
                    <span style="color: rgb(254 204 42); font-weight: bolder;">Your dream home<br></span>
                    <span style="color: white; font-weight: bolder;">is just a click away</span>
                </h4>

                <p class="text-left d-block d-md-none mb-4 px-1" style="color: white !important;">Book a free consultation with our
                    interior designers.</p>

                <button data-toggle="modal" data-target="#myModal1" data-backdrop="static" data-keyboard="false"
                    class="btn btn-warning elegant_btn" style="padding: 12px 48px 12px 48px; border-radius: 100px;">
                    START YOUR DESIGN JOURNEY
                </button>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-dark" style="padding: 60px 0px 60px 0px;">
        <div class="row justify-content-center">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5 class="text-white">Terms & Condition</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5 class="text-white">Mission & Vission</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5 class="text-white">Contact Us<h5></a>
                </li>
            </ul>
        </div>
        
        <h5 class="text-white text-center">© www.elegantinterior.info | All Rights Reserved</h5>

        <div class="row justify-content-center mt-5">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <img src="https://www.elegantinterior.info/wp-content/plugins/acurax-social-media-widget/images/themes/4/twitter.png" style="width: 44px;">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <img src="https://www.elegantinterior.info/wp-content/plugins/acurax-social-media-widget/images/themes/4/facebook.png" style="width: 44px;">
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="https://www.elegantinterior.info/wp-content/plugins/acurax-social-media-widget/images/themes/4/youtube.png" style="width: 44px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="https://www.elegantinterior.info/wp-content/plugins/acurax-social-media-widget/images/themes/4/linkedin.png" style="width: 44px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="https://www.elegantinterior.info/wp-content/plugins/acurax-social-media-widget/images/themes/4/instagram.png" style="width: 44px;">
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Designs for Every Budget</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div id="modalCarouseal" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#modalCarouseal" data-slide-to="0" class="active"></li>
                          <li data-target="#modalCarouseal" data-slide-to="1"></li>
                          <li data-target="#modalCarouseal" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior9.jpg" class="img-fluid" style="height: 200px; width: 100%;">
                          </div>
                          <div class="carousel-item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior10.jpg" class="img-fluid" style="height: 200px; width: 100%;">
                          </div>
                          <div class="carousel-item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/home-interior11.jpg" class="img-fluid" style="height: 200px; width: 100%;">
                          </div>
                        </div>
                    </div>

                    <form class="pt-4" action="https://www.elegantinterior.info/landing-page/home-interiors/handler.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required placeholder="Name"
                                style="height: 60px; border: 1px solid #d6d6d6;" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" required placeholder="Email ID"
                                style="height: 60px; border: 1px solid #d6d6d6;" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" required placeholder="Phone No." pattern="^\d{10}$"
                                style="height: 60px; border: 1px solid #d6d6d6;" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="message" required placeholder="Message"
                                style="height: 60px; border: 1px solid #d6d6d6;" />
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-warning w-100"
                                style="border-radius: 100px; font-weight: bold; height: 50px;">GET FREE
                                QUOTE</button>
                        </div>
                        <p class="text-center">By submitting this form, you agree to the privacy policy & terms and conditions</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Talk to Experts</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="modalTwoCarouseal" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#modalTwoCarouseal" data-slide-to="0" class="active"></li>
                                  <li data-target="#modalTwoCarouseal" data-slide-to="1"></li>
                                  <li data-target="#modalTwoCarouseal" data-slide-to="2"></li>
                                  <li data-target="#modalTwoCarouseal" data-slide-to="3"></li>
                                  <li data-target="#modalTwoCarouseal" data-slide-to="4"></li>
                                  <li data-target="#modalTwoCarouseal" data-slide-to="5"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/duplex.jpg">
                                        <div class="card-img-overlay home-overlay">
                                            <h4 class="text-white mb-0">Duplex</h4>
                                        </div>
                                    </div>Duplex
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/4-bhk.jpg">
                                        <div class="card-img-overlay home-overlay">
                                            <h4 class="text-white mb-0">4BHK</h4>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/3-bhk.jpg">
                                        <div class="card-img-overlay home-overlay">
                                            <h4 class="text-white mb-0">3BHK</h4>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/2-bhk.jpg">
                                        <div class="card-img-overlay home-overlay">
                                            <h4 class="text-white mb-0">2BHK</h4>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/1-bhk.jpg">
                                        <div class="card-img-overlay home-overlay">
                                            <h4 class="text-white mb-0">1BHK</h4>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card swiper-slide shadow-lg bg-white rounded home-card">
                                        <img class="card-img-top home-image" src="<?php echo esc_url( get_template_directory_uri() ) ?>/home_interior_assets/images/living-room.jpg">
                                        <div class="card-img-overlay home-overlay">
                                            <h4 class="text-white mb-0">Living Room</h4>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="pt-4" action="https://www.elegantinterior.info/landing-page/home-interiors/handler.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" required placeholder="Name"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required placeholder="Email ID"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" required placeholder="Phone No." pattern="^\d{10}$"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="message" required placeholder="Message"
                                        style="height: 60px; border: 1px solid #d6d6d6;" />
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-warning w-100"
                                        style="border-radius: 100px; font-weight: bold; height: 50px;">GET FREE
                                        QUOTE</button>
                                </div>
                                <p class="text-center">By submitting this form, you agree to the privacy policy & terms and conditions</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

        var swiper = new Swiper(".impressiveHomeSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

        var swiper = new Swiper(".homeSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

        var swiper = new Swiper(".testimonialSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

        var swiper = new Swiper(".priceSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

        $(document).ready(function () {
            $(".youtube").grtyoutube();
            const counterUp = window.counterUp.default

            const callback = entries => {
                entries.forEach(entry => {
                    const el = entry.target
                    if (entry.isIntersecting && !el.classList.contains('is-visible')) {
                        counterUp(el, {
                            duration: 4000,
                            delay: 16,
                        })
                        el.classList.add('is-visible')
                    }
                })
            }

            const IO = new IntersectionObserver(callback, { threshold: 1 })

            const el1 = document.querySelector('.counter1')
            IO.observe(el1)

            const el2 = document.querySelector('.counter2')
            IO.observe(el2)

            const el3 = document.querySelector('.counter3')
            IO.observe(el3)

            const el4 = document.querySelector('.counter4')
            IO.observe(el4)

        })      
        
        $( ".dropdown" )
        .mouseover(function() {
            $( this ).addClass('show').attr('aria-expanded',"true");
            $( this ).find('.dropdown-menu').addClass('show');
        })
        .mouseout(function() {
            $( this ).removeClass('show').attr('aria-expanded',"false");
            $( this ).find('.dropdown-menu').removeClass('show');
        });
    </script>
</body>

</html>