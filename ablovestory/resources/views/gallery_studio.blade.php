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
    .gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 15px;
}

.image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.image.portrait img {
    aspect-ratio: 3 / 4;
}

.image.landscape img {
    aspect-ratio: 16 / 9;
}


.gallery-img {
    cursor: pointer;
    transition: transform .2s ease;
}

.gallery-img:hover {
    transform: scale(1.02);
}

/* MODAL */
.modal-close {
    position: fixed;
    top: 20px;
    right: 25px;
    font-size: 40px;
    color: #fff;
    background: transparent;
    border: none;
    cursor: pointer;
    z-index: 10000;
    line-height: 1;
}

.modal-close:hover {
    opacity: .7;
}

.image-modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.9);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.image-modal img {
    max-width: 95vw;
    max-height: 95vh;
    object-fit: contain;
    border-radius: 8px;
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
       
        <!-- start inportant-people-section -->
        <section class="inportant-people-section section-padding" id="people">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>{{ env('WEDDINGS'), ''}}</h2>
                            <p>Cada imagen guarda una emoción, una sonrisa y un recuerdo que<br> nos acompañará para siempre. <br> Gracias por permitirnos revivir nuestra boda a través de estas miradas y sentimientos compartidos..</p>
                        </div>
                    </div>
                </div>
                <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="inportant-people-content">
                           
                           <div class="gallery">
    @foreach($images as $image)
        <img
            src="{{ $image['url'] }}"
            alt="{{ $image['name'] }}"
            class="gallery-img"
            onclick="openModal('{{ $image['url'] }}')"
        >
    @endforeach
</div>


<!-- MODAL -->
<div id="imageModal" class="image-modal">
    <button class="modal-close" onclick="closeModal()">×</button>
    <img id="modalImage">
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
<script>
function openModal(src) {
    const modal = document.getElementById('imageModal');
    const img = document.getElementById('modalImage');

    img.src = src;
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}
</script>

</html>