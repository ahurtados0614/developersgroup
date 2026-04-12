<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/png">
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

<style>
    .grid {
        margin-top: 30px;
        cursor: pointer;
    }

    /* ============================
   LIGHTBOX DE VIDEO
============================ */
    #videoLightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    #videoLightbox .lightbox-content {
        position: relative;
        width: 90%;
        max-width: 900px;
    }

    #videoLightbox video {
        width: 100%;
        height: auto;
    }

    #videoLightbox .close-btn {
        position: absolute;
        top: -49px;
        right: 0;
        font-size: 40px;
        color: white;
        cursor: pointer;
    }

    /* ============================
   LIGHTBOX DE FOTOS
============================ */
    #photoLightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    #photoLightbox .lightbox-content {
        position: relative;
        width: 90%;
        max-width: 900px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #photoLightbox img {
        max-width: 100%;
        max-height: 85vh;
        /*border-radius: 10px;*/
        display: block;
        object-fit: contain;
        /* Ajuste perfecto de la foto */
        background: #000;
        /* evita que el botón se pierda */
        z-index: 1;
    }

    #photoLightbox .close-btn {
        position: absolute;
        top: -45px;
        right: 0;
        font-size: 40px;
        padding: 5px 10px;
        color: white;
        /* background: rgba(0, 0, 0, 0.6);*/
        border-radius: 5px;
        cursor: pointer;
        z-index: 2;
        /* <-- MUY IMPORTANTE */
    }

    /* ============================
   GRID
============================ */
    .grid-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 20px;
    }
</style>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper flower-fixed-body">

        <!-- start preloader -->
        <x-preloader />

        <!-- end preloader -->

        <!-- Start header externo -->
        <x-headerext />
        <!-- end of header -->
        @if(!empty($success))
        <div class="alert alert-success" id="alert">
            {{ $success }}
        </div>
        @endif
        <!-- start inportant-people-section -->
        <section class="inportant-people-section section-padding" id="people">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>{{ env('WEDDINGS'), ''}}</h2>
                            <p>Este espacio reúne los momentos más especiales capturados por quienes compartieron con nosotros esta celebración. <br> Gracias por dejarnos ver nuestra boda a través de sus ojos y voces.</p>
                        </div>
                    </div>
                </div>
                <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="inportant-people-content">
                            <div class="tablist">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#photo" data-toggle="tab">Imágenes</a>
                                    </li>
                                    <li>
                                        <a href="#audio" data-toggle="tab">Audios</a>
                                    </li>
                                    <li>
                                        <a href="#video" data-toggle="tab">Videos</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in active grid-wrapper" id="photo">
                                    @foreach ($fotos as $foto)
                                    <div class="grid" title="Clic para ampliar" onclick="openPhotoLightbox('{{ asset($foto->file_path) }}')">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img class="mifile" src="{{ $foto->file_path }}" alt class="img img-responsive" style="width: 100%; max-width: 400px; ">

                                            </div>
                                            <div class="details">
                                                <h3>{{ ucwords($foto->gest) }}</h3>
                                                <span>Cargado: {{ ucfirst(\Carbon\Carbon::parse($foto->created_at)->locale('es')->isoFormat('MMM D [de] YYYY, h:mm a')) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="tab-pane fade grid-wrapper" id="video">
                                    @foreach ($videos as $video)
                                    <div class="grid" title="Clic para ampliar" onclick="openLightbox('{{ asset($video->file_path) }}')">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <video style="max-width: 99%;" class="mifile img img-responsive">
                                                    <source src="{{ asset($video->file_path) }}" type="video/mp4">
                                                    Tu navegador no soporta la reproducción de videos.
                                                </video>
                                            </div>

                                            <div class="details">
                                                <h3>{{ ucwords($video->gest) }}</h3>
                                                <span>
                                                    Cargado:
                                                    {{ ucfirst(\Carbon\Carbon::parse($video->created_at)
                                                    ->locale('es')
                                                    ->isoFormat('MMM D [de] YYYY, h:mm a')) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div id="videoLightbox" class="lightbox" onclick="closeLightbox(event)">
                                    <div class="lightbox-content">
                                        <span class="close-btn" onclick="closeLightbox(event)">✕</span>
                                        <video id="lightboxVideo" controls></video>
                                    </div>
                                </div>
                                <!-- LIGHTBOX PARA FOTOS -->
                                <div id="photoLightbox" class="lightbox" onclick="closePhotoLightbox(event)">
                                    <div class="lightbox-content">
                                        <span class="close-btn" onclick="closePhotoLightbox(event)">✕</span>
                                        <img id="lightboxImage" src="" alt="Foto" />
                                    </div>
                                </div>
                                <script>
                                    function openPhotoLightbox(imageSrc) {
                                        const lightbox = document.getElementById('photoLightbox');
                                        const img = document.getElementById('lightboxImage');

                                        img.src = imageSrc;
                                        lightbox.style.display = 'flex';
                                    }

                                    function closePhotoLightbox(event) {
                                        if (event.target.classList.contains('lightbox') ||
                                            event.target.classList.contains('close-btn')) {

                                            const lightbox = document.getElementById('photoLightbox');
                                            const img = document.getElementById('lightboxImage');

                                            img.src = "";
                                            lightbox.style.display = 'none';
                                        }
                                    }
                                </script>

                                <script>
                                    function openLightbox(videoSrc) {
                                        const lightbox = document.getElementById('videoLightbox');
                                        const video = document.getElementById('lightboxVideo');

                                        video.src = videoSrc;
                                        lightbox.style.display = 'flex';
                                    }

                                    function closeLightbox(event) {
                                        if (event.target.classList.contains('lightbox') ||
                                            event.target.classList.contains('close-btn')) {

                                            const lightbox = document.getElementById('videoLightbox');
                                            const video = document.getElementById('lightboxVideo');

                                            video.pause();
                                            video.src = "";
                                            lightbox.style.display = 'none';
                                        }
                                    }
                                </script>


                                <div class="tab-pane fade grid-wrapper " id="audio">
                                    @foreach ($audios as $audio)
                                    <div class="grid">
                                        <div class="inner">
                                            <div class="audio-player" style="background-color: #925b48; position: relative;  overflow: hidden; width: 100%; max-width: 400px; aspect-ratio: 1/1; ">

                                                <!-- Fondo de imagen -->
                                                <img src="/assets/images/icons/2.png" alt="Fondo de audio" class="audio-bg"
                                                    style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">

                                                <!-- Reproductor de audio centrado -->
                                                <audio controls
                                                    style="position: absolute; bottom: 50%; left: 50%; transform: translate(-50%, 50%); width: 80%; z-index: 2; background: rgba(255,255,255,0.15); backdrop-filter: blur(5px); border-radius: 30px;">
                                                    <source src="{{ $audio->file_path }}" type="audio/mpeg">
                                                    Tu navegador no soporta la reproducción de audio.
                                                </audio>

                                            </div>

                                            <div class="details" style="margin-top: 10px;">
                                                <h3>{{ ucwords($audio->gest) }}</h3>
                                                <span>Cargado: {{ ucfirst(\Carbon\Carbon::parse($audio->created_at)->locale('es')->isoFormat('MMM D [de] YYYY, h:mm a')) }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end inportant-people-section -->


        <!-- end blog-section -->
        <!-- start site-footer -->
        <x-footer />
        <!-- end site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <script>
        setTimeout(function() {
            $(".alert").fadeTo(2500, 500).slideUp(500, function() {
                $(".alert").remove();
            });
        }, 2500);
    </script>
    <style>
        h3 {
            text-transform: capitalize !important;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }


        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            margin: 0% 10%;
        }
    </style>
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