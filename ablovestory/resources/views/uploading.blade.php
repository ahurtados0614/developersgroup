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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper flower-fixed-body">

        <!-- start preloader -->
        <x-preloader />

        <!-- end preloader -->

        <!-- Start header externo -->
        <x-headerext />
        <!-- end of header -->
        <!---modals --->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('guest.memories') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre (Quien carga las imágenes):</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required><br>
                                <label for="file">Seleccionar Foto:</label>
                                <input type="file" class="form-control" id="file" name="imagenes[]" placeholder="Seleccionar Multimedia" accept="image/*" multiple required>
                                <span class="help">Formatos aceptados: jpg, jpeg, png, gif</span>
                                <input id="typeFoto" name="type" type="hidden">
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button> <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="myModal2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('guest.memories') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_title2">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre (Quien carga el video):</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ingresa tu nombre" required><br>
                                <label for="video">Seleccionar Video (Max. 3 Minutos):</label>
                                <input name="video" type="file" class="form-control" id="video" placeholder="Seleccionar Multimedia" accept="video/*" required>
                                <span class="help">Formatos aceptados: mp4, avi, mpeg o mov</span>
                                <input type="hidden" id="typeVideo" name="type" required>
                            </div>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button> <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="myModal3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('guest.memories') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_title3">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre (Quien carga el audio):</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ingresa tu nombre" required><br>
                                <label for="audio">Seleccionar Audio (Max. 2 Minutos):</label>
                                <input name="audio" type="file" class="form-control" id="audio" placeholder="Seleccionar Multimedia" accept="audio/*" required>
                                <span class="help">Formatos aceptados: mp3, wav, ogg</span>
                                <input type="hidden" id="typeAudio" name="type" required>
                            </div>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button> <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--fin modals -->
        <!-- start inportant-people-section -->
        <section class="inportant-people-section section-padding" id="people">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Recuerdos del día de la boda</h2>
                            <p>Cada sonrisa, cada abrazo y cada momento compartido hacen parte de nuestra historia.
                                Queremos guardar para siempre la magia de este día tan especial, por eso te invitamos a subir tus fotos, videos o mensajes de audio y ser parte de nuestros recuerdos más felices.</p>
                        </div>
                    </div>
                </div>
                <!-- end section-title -->
                <!---alertas----->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li style="list-style-type:none">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success" id="alert">
                    {{ session('success') }}
                </div>
                @endif
                <!----fin alertas---->
                <!-- start form -->
                <div class="row justify-content" style="margin-bottom:6%;">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item-button">
                        <div class="card-item-button">
                            <a href="#" style="text-decoration: none;" title="" data-toggle="modal" data-target="#myModal" onclick="loadForm('Subir Fotos', 'foto')">
                                <h2 class="title-card">Subir Fotos</h2>
                            <i class="fa-regular fa-camera"></i>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item-button">
                        <div class="card-item-button" >
                        <a href="#" style="text-decoration: none;" title="" data-toggle="modal" data-target="#myModal2" onclick="loadForm('Subir Video', 'video')">    
                        <h2 class="title-card">Subir Video</h2>
                            <i class="fa-solid fa-video"></i>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item-button">
                        <div class="card-item-button">
                            <a href="#" style="text-decoration: none;" title="" data-toggle="modal" data-target="#myModal3" onclick="loadForm('Grabar Audio', 'audio')">
                                <h2 class="title-card">Grabar Audio</h2>
                            <i class="fa-solid fa-microphone"></i>
                        </a>
                        </div>
                    </div>
                </div>
                <!-- end form -->
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

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        function loadForm(name, type) {
            switch (type) {
                case "foto":
                    document.getElementById("modal_title").innerText = name;
                    document.getElementById("typeFoto").value = type
                    break;
                case "video":
                    document.getElementById("modal_title2").innerText = name;
                    document.getElementById("typeVideo").value = type
                    break;
                default:
                    document.getElementById("modal_title3").innerText = name;
                    document.getElementById("typeAudio").value = type
                    break;
            }
        }
    </script>
</body>
<style>
    .btn-primary {
        background: #925b48;
        border-color: #925b48;
    }

    .btn-primary:hover {
        background: rgb(182, 155, 134);
        border-color: rgb(182, 155, 134);
    }

    .item-button {
        padding: 0.5em;
    }

    .card-item-button {
        border: solid 2px #925b48;
        text-align: center;
        border-radius: 5px;
    }

    .card-item-button>.fi {
        color: #925b48;
    }

    i.fa-regular {
        color: #925b48;
        font-size: 6rem;
        margin: 0% 22% 8% 22%;
    }

    i.fa-solid {
        color: #925b48;
        font-size: 6rem;
        margin: 0% 22% 8% 22%;
    }

    .section-padding {
        padding: 0px !important;
    }

    .title-card {
        font-family: "Great Vibes", cursive;
    }

    .modal-title {
        font-family: "Great Vibes", cursive;
    }

    
    @media only screen and (max-width : 900px) {
        .card-item-button>a>.fa-regular {
            color: #925b48;
            font-size: 7rem;
            margin: 0% 0% 6% 0%;
        }

        .card-item-button>a>.fa-solid {
            color: #925b48;
            font-size: 7rem;
            margin: 0% 0% 6% 0%;
        }
    }
</style>
<script>
    setTimeout(function() {
        $(".alert").fadeTo(2500, 500).slideUp(500, function() {
            $(".alert").remove();
        });
    }, 2500);
</script>
<style>
    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger {
        color: rgb(148, 10, 10);
        background-color: rgb(241, 168, 168);
        border-color: #c3e6cb;
    }

    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
    }
</style>
<script>
    document.getElementById('video').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (!file) return;

        // Crear un elemento de video invisible
        const video = document.createElement('video');
        video.preload = 'metadata';

        // Crear una URL temporal para el archivo local
        video.src = URL.createObjectURL(file);

        video.onloadedmetadata = function() {
            URL.revokeObjectURL(video.src); // liberamos memoria
            const duration = video.duration; // duración en segundos
            const maxDuration = 5 * 60; // 5 minutos

            if (duration > maxDuration) {
                alert("El video excede los 5 minutos permitidos. Por favor selecciona uno más corto.");
                event.target.value = ''; // limpia el input
            }
        };

        video.onerror = function() {
            alert("El archivo seleccionado no es un video válido.");
            event.target.value = '';
        };
    });
</script>
<script>
document.getElementById('audio').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (!file) return;

    const audio = document.createElement('audio');
    audio.preload = 'metadata';
    audio.src = URL.createObjectURL(file);

    audio.onloadedmetadata = function() {
        URL.revokeObjectURL(audio.src);
        const duration = audio.duration; // duración en segundos
        const maxDuration = 120; // 2 minuto

        if (duration > maxDuration) {
            alert("La nota de audio no debe exceder 2 minutos.");
            event.target.value = '';
        }
    };

    audio.onerror = function() {
        alert("El archivo seleccionado no es un audio válido.");
        event.target.value = '';
    };
});
</script>

</html>