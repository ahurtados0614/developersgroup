<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/png">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles Custom-->
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper flower-fixed-body">

        <!-- start preloader -->
          <x-preloader />
        
        <!-- end preloader -->

        <!-- Start header -->
         <x-header />
        <!-- end of header -->

        <!-- start of hero -->
        <section class="hero-slider hero-style-1">
            <div class="swiper-container">
                <div class="slide-main-text">
                    <div class="container">
                        <div class="slide-title">
                            <h2>{{ env('WEDDINGS'), ''}}</h2>
                        </div>
                        <div class="wedding-date">
                            <span>Tiempo desde que unimos nuestras vidas</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="count-down-clock">
                            <div id="clock"></div>
                        </div>
                    </div>
                    <div class="pattern">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset('assets/images/slider/slide-1.jpg') }}"></div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset('assets/images/slider/slide-2.jpg') }}"></div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset('assets/images/slider/slide-3.jpg') }}"></div>
                    </div>
                    <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- start couple-section -->
        <section class="couple-section section-padding" id="couple">
            <div class="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Pareja Feliz</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, <br>gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-col">
                <div class="couple-row clearfix">
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/couple/img-1.jpg') }}" alt>
                    </div>
                    <div class="details">
                        <div class="inner">
                            <h2> Alvaro Hurtado Sanmartin</h2>
                            <h4>Hola, Soy Alvaro Hurtado Sanmartin</h4>
                            <p>un hombre de valores firmes, trabajador y comprometido. Ingeniero de sistemas, excelente papá e hijo amoroso. Ama lo simple y disfruta construir momentos de unión y le felicidad en familia. Cree en un hogar basado en el amor, donde sus hijos crezcan felices y donde cada meta se cumple con dedicación y propósito.</p>
                           <!--<ul class="social-links">
            <li><a href="#"><i class="ti-facebook"></i></a></li>
            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
             <li><a href="#"><i class="ti-linkedin"></i></a></li>
             <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col">
                <div class="couple-row last-row clearfix">
                    <div class="details">
                        <div class="inner">
                            <h2>Brenda Johana Martínez Pineda</h2>
                            <h4>Hola, Soy Brenda Johana Martínez Pineda</h4>
                            <p>
                            Soy una mujer fuerte, sensible y de un gran corazón. Contadora pública, trabajadora y dedicada, siempre dispuesta a dar lo mejor de sí. Una mamá comprometida, una hija amorosa y una gran compañera. Valora la familia, los detalles sinceros y los gestos que nacen del alma. Sueña con un hogar lleno de amor, respeto y unión, y cada día pone su esfuerzo para construirlo.
                            </p>
                            <!--<ul class="social-links social-right">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/couple/img-2-2.jpg') }}" alt>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end couple-section -->

        <!-- start story-section -->
        <section class="story-section section-padding" id="story">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>nuestra historia de amor</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, <br> gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
                <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="story-timeline">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="story-text right-align-text story-text-right story-pad-top  ">
                                        <h3>Primer Encuentro</h3>
                                        <span class="date">Jan 17 2019</span>
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of love means that real life her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather </p>
                                        <a class="theme-btn-s6" href="#" target="_blank" title="LEER MÁS">LEER MÁS</a>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="img-holder img-holder-right">
                                        <img src="{{ asset('assets/images/story/img-1.jpg') }}" alt class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder img-holder-left right-align-text story-slider">
                                        <img src="{{ asset('assets/images/story/img-2.jpg') }}" alt class="img img-responsive">
                                        <img src="{{ asset('assets/images/story/img-3.jpg') }}" alt class="img img-responsive">
                                    </div>
                                </div>
                                <div class="col col-md-6 text-holder">
                                    <div class="story-text story-text-left">
                                        <h3>Primera cita</h3>
                                        <span class="date">Feb 14 2019</span>
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of love means that real life her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather </p>
                                        <a class="theme-btn-s6" href="#" target="_blank" title="LEER MÁS">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6 text-holder right-heart">
                                    <div class="story-text right-align-text story-text-right">
                                        <h3>Propuesta</h3>
                                        <span class="date">Jun 27 2019</span>
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of love means that real life her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather </p>
                                        <a class="theme-btn-s6" href="#" target="_blank" title="LEER MÁS">LEER MÁS</a>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="img-holder img-holder-right right-align-text story-slider">
                                        <img src="{{ asset('assets/images/story/img-7.jpg') }}" alt class="img img-responsive">
                                        <img src="{{ asset('assets/images/story/img-5.jpg') }}" alt class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder video-holder img-holder-left">
                                        <img src="{{ asset('assets/images/story/img-80-1.jpg') }}" alt class="img img-responsive">
                                        <a href="https://www.youtube.com/embed/iamo71kJIpo?si=KFl1vrC2nyQvOMFn?autoplay=1" data-type="iframe" class="video-play-btn">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-6 text-holder">
                                    <div class="story-text story-text-left">
                                        <h3>Compromiso</h3>
                                        <span class="date">Dec 14 2019</span>
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of love means that real life her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather </p>
                                        <a class="theme-btn-s6" href="#" target="_blank" title="LEER MÁS">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <div class="clearfix"></div>
        <!-- end story-section -->


        <!-- start gallery-section -->
        <section class="gallery-section section-padding" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Memorias de un Día Inolvidable</h2>
                            <p>Enmarcados en el tiempo como una delicada ilustración, estos recuerdos revelan la belleza de nuestro día en cada sonrisa y celebración.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            <div class="grid grid-item">
                                <a href="{{ asset('assets/images/gallery/img-1.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('assets/images/gallery/img-1.jpg') }}" alt class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="{{ asset('assets/images/gallery/img-2.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('assets/images/gallery/img-2.jpg') }}" alt class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="{{ asset('assets/images/gallery/img-3.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('assets/images/gallery/img-3.jpg') }}" alt class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="{{ asset('assets/images/gallery/img-4.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('assets/images/gallery/img-4.jpg') }}" alt class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="{{ asset('assets/images/gallery/img-5.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('assets/images/gallery/img-5.jpg') }}" alt class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="{{ asset('assets/images/gallery/img-7.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('assets/images/gallery/img-7.jpg') }}" alt class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="https://www.youtube.com/embed/iamo71kJIpo?autoplay=1" data-type="iframe" class="video-play-btn">
                                    <img src="{{ asset('assets/images/story/img-8-1.jpg') }}" alt class="img img-responsive">
                                    <i class="ti-control-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="text-align: center;">
                    <a href="/gallery" class="theme-btn __web-inspector-hide-shortcut__" >Galería del Día de la Boda</a>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </section>
        <!-- end gallery-section -->


        <!-- start invitation-section -->
        <!--
        <section class="invitation-section theme-layr">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="invitation-box">
                            <div class="inner">
                                <h2>Save the Date</h2>
                                <span>For the wedding of</span>
                                <h3>{{ env('WEDDINGS'), ''}}</h3>
                                <p>Please reserve before December 16th, 2019</p>
                                <a href="#rsvp" class="theme-btn" id="scroll">RSVP now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        -->
        <!-- end invitation-section -->

        <!-- start inportant-people-section -->
        <!--
        <section class="inportant-people-section section-padding" id="people">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Groomsmen & Bridesmaid</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, <br> gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="inportant-people-content">
                            <div class="tablist">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#photo" data-toggle="tab">Imágenes</a>
                                    </li>
                                    <li>
                                        <a href="#video" data-toggle="tab">Videos</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in active grid-wrapper" id="photo">
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-7.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Rachel Li</h3>
                                                <span>Made of honor</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-8.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Male Vign</h3>
                                                <span>Best friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-9.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Jonny Mich</h3>
                                                <span>Friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-10.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Brodd Wid</h3>
                                                <span>Friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-11.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Nokshal bedi</h3>
                                                <span>Friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">

                                                <img src="{{ asset('assets/images/team/img-12.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Holly Fie</h3>
                                                <span>Friend</span>

                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade grid-wrapper " id="video">
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-1.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Jhon Michel</h3>
                                                <span>Best man</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-2.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Chasmoos jhon</h3>
                                                <span>Best friden</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-3.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Kaiste pate</h3>
                                                <span>Friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-4.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Hatu Michel</h3>
                                                <span>Friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-5.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Michel doin</h3>
                                                <span>Friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset('assets/images/team/img-6.jpg') }}" alt class="img img-responsive">

                                            </div>
                                            <div class="details">
                                                <h3>Topper jone</h3>
                                                <span>Friend</span>
                                                <div class="social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        -->
        <!-- end inportant-people-section -->


        <!-- start contact-section -->
    <!--
        <section class="contact-section section-padding p-b-0" id="rsvp">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Join Our Party</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, <br> gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->
        <!-- end contact-section -->

        <!-- start contact-section -->
        <!--
        <section class="contact-section p-t-0">
            <div class="left-col">
                <div class="contact-form">
                    <form id="rsvp-form" class="form validate-rsvp-form row" method="post">
                        <div class="col col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="col col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Your Email*">
                        </div>
                        <div class="col col-sm-6">
                            <select class="form-control" name="guest">
                                <option disabled selected>Number Of Guest*</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col col-sm-6">
                            <select class="form-control" name="events">
                                <option disabled selected>I Am Attending*</option>
                                <option>Al events</option>
                                <option>Wedding ceremony</option>
                                <option>Reception party</option>
                            </select>
                        </div>
                        <div class="col col-sm-12">
                            <textarea class="form-control" name="notes" placeholder="Your Message*"></textarea>
                        </div>
                        <div class="col col-sm-12 submit-btn">
                            <button type="submit" class="theme-btn">Send Invitation</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="col col-md-12 success-error-message">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="right-col">
            </div>
        </section>
-->
        <!-- end contact-section -->

        <!-- start contact-section --
        <section class="contact-section section-padding" id="rsvp">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Are you attending?</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="contact-form">
                            <form id="rsvp-form" class="form validate-rsvp-form row" method="post">
                                <div class="col col-sm-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col col-sm-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email*">
                                </div>
                                <div class="col col-sm-6">
                                    <select class="form-control" name="guest" >
                                        <option disabled selected>Number Of Guest*</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col col-sm-6">
                                    <select class="form-control" name="events" >
                                        <option disabled selected>I Am Attending*</option>
                                        <option>Al events</option>
                                        <option>Wedding ceremony</option>
                                        <option>Reception party</option>
                                    </select>
                                </div>
                                <div class="col col-sm-12">
                                    <textarea class="form-control" name="notes" placeholder="Your Message*"></textarea>
                                </div>
                                <div class="col col-sm-12 submit-btn">
                                    <button type="submit" class="theme-btn">Send Invitation</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="col col-md-12 success-error-message">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->

        <!-- start event-section -->
        <section class="event-section section-padding" id="event">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        
                        <div class="section-title">
                            <h2>Wedding Events</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="event-grids clearfix">
                            <div class="grid">
                                <img src="{{ asset('assets/images/story/img-9.jpg') }}" alt="" class="img img-responsive">
                                <h3>Date & Time</h3>
                                <p>Sunday – 17 August 2019
                                    <br>From 10:00 AM – 16:00 PM</p>
                                <p class="phone">Pho: +0012554976757</p>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" class="location popup-gmaps">See location</a>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/story/img-11-3.jpg') }}" alt="" class="img img-responsive">
                                <h3>Location & Place</h3>
                                <p>Gulshan Hall 2100 Baltimore Avenue City
                                    <br> Ocean City, MD 21842 United States</p>
                                <p class="phone">Pho: +0012554976757</p>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" class="location popup-gmaps">See location</a>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/story/img-11-2.jpg') }}" alt="" class="img img-responsive">
                                <h3>Party & Event</h3>
                                <p>Ceremony: 4:00 PM
                                    <br>Reception: 5:30 PM</p>
                                <p class="phone">Pho: +0012554976757</p>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" class="location popup-gmaps">See location</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end event-section -->

        <!-- start partners-section -->
         <!--
        <section class="partners-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Wedding Gift Registry</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids clearfix">
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-1.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-2.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-3.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-4.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-5.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-6.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-7.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/img-8.jpg') }}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->
        <!-- end partners-section -->

        <!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Latest form the blog</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids clearfix">
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{ asset('assets/images/blog/img-1.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Hundreds of designs for every wedding style</a></h3>
                                    <p>From bouquets to buttonholes and roses to lillies, find your dream wedding blooms</p>
                                    <p class="date"><i class="ti-timer"></i> December | 24, 2019</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{ asset('assets/images/blog/img-2.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">How to plan a perfect wedding in moments</a></h3>
                                    <p>Give your guests something sweet to take home on the day with our little gifts</p>
                                    <p class="date"><i class="ti-timer"></i> December | 24, 2019</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{ asset('assets/images/blog/img-80-1.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Possible no matter where you are on your journey</a></h3>
                                    <p>Whether you're looking for wedding outfits or how to decorate a cake, find it all at </p>
                                    <p class="date"><i class="ti-timer"></i> December | 24, 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->

        <!-- start getting-there-section -->
        <section class="getting-there-section section-padding">
            <div class="container">
                <div class="row">
                     <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Getting there</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-lg-6">
                        <h3>Transportation</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                    <div class="col col-lg-6">
                        <h3>Accommodations</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end getting-there-section -->

        <!-- start site-footer -->
        <x-footer />
        <!-- end site-footer -->

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
