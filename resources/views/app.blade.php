<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{isset($title) ? $title : 'Laravel'}}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{ asset('images/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->

    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    @livewireStyles
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg {{ request()->path() == '/' ? 'navbar-dark' : 'navbar-light' }} fixed-top py-3 d-block backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand  " style="font-weight:bold; " href="/"><img src="{{ asset('images/gallery/AQ-new.png')}}" height="45" alt="logo" style="margin-left: 35%" /> <span style="background-image: linear-gradient(to right, #f65a19 0%, #18c1bd 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: block;"> Aquarius IT SV</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2"><a class="nav-link ripple" aria-current="page" id="inicio" href="/">Inicio</a></li>
                        <li class="nav-item px-2"><a class="nav-link ripple" id="servicios" href="/servicios">Servicios</a></li>
                        <li class="nav-item px-2"><a class="nav-link ripple" id="nosotros" href="/sobre-nosotros">Sobre Nosotros</a></li>
                        <li class="nav-item px-2"><a class="nav-link ripple" id="proyectos" href="/proyectos">Proyectos</a></li>
                        <li class="nav-item px-2"><a class="nav-link ripple" id="contacto" href="/contacto">Contacto</a></li>
                        @auth
                            <li class="nav-item px-2">
                                <a class="nav-link ripple" id="admin" href="/admin">Administración</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link ripple" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" id="logout">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul>

                    {{-- <aclass="btnbtn-primaryorder-1order-lg-0ms-lg-3text-black"id="contacto"href="/contacto">Contacto</a> --}}

                    {{-- @guest
                    <a class="btn  order-1 order-lg-0 ms-lg-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Iniciar Sesion</a>
                    @else

                    <div class="dropdown">
                        <a class="btn text-black dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#opinionModal">Crear Opinion</a></li>
                            <?php
                        $parameter =[
                            'id' =>Auth::user()->id,
                        ];
                    $parameter= Crypt::encrypt($parameter);
                ?>
                            <li><a class="dropdown-item" href="/perfil/{{$parameter}}">Mi Perfil</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                                    Cerrar Sesion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>


                        </ul>
                    </div>
                    @endguest --}}
                </div>
            </div>
        </nav>

        @yield('content')
          
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a class="navbar-brand  " style="font-weight:bold; " href="/"><img src="{{ asset('images/gallery/AQ-new.png')}}" height="45" alt="logo" /> <span style="background-image: linear-gradient(to right, #f65a19 0%, #18c1bd 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Aquarius IT SV</span></a></h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                <ul class="offcanvas-menu">
                    <li>
                        <a href="{{ url('/') }}" @if (request()->path() == '/') class="active" @endif>Inicio</a>
                    </li>
                    <li>
                        <a href="{{ url('/servicios') }}" @if (request()->path() == 'servicios') class="active" @endif>Servicios<a>
                    </li>
                    <li>
                        <a href="{{ url('/sobre-nosotros') }}" @if (request()->path() == 'sobre-nosotros') class="active" @endif>Sobre Nosotros</a>
                    </li>
                    <li>
                        <a href="{{ url('/proyectos') }}" @if (request()->path() == 'proyectos') class="active" @endif>Proyectos</a>
                    </li>
                    <li>
                        <a href="{{ url('/contacto') }}" @if (request()->path() == 'contacto') class="active" @endif>Contacto</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>
        <!---LOGIN MODAL--->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white  w-100 text-center" id="staticBackdropLabel">Inicio de Sesion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text-black active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Iniciar Sesion</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text-black" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Registro</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!--Login tab-->
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <div class="card text-center">
                                    <div class="card-body text-center mx-center">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">correo </label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row pt-5">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            Recordar mis datos
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">
                                                        Iniciar Sesion
                                                    </button>


                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end Login tab-->

                            <!--Register tab-->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row pt-3">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row pt-3">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" aria-describedby="passwordHelpBlock">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <div id="passwordHelpBlock" class="form-text">
                                                                La contraseña debe tener mas de 8 caracteres y un maximo de 255 caracteres
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row pt-3">
                                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Registrarme
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end Register tab-->

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        <!---END LOGIN MODAL--->


        <!--MODAL DE OPINIONES-->
        <!-- Modal -->
        <div class="modal fade" id="opinionModal" tabindex="-1" aria-labelledby="opinionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header  bg-primary ">
                        <h5 class="modal-title text-white  w-100 text-center" id="opinionModalLabel">Opinión</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center justify-content-center">
                        <form method="POST" action="{{ url("/opinion/add") }}" id="formOpion">
                            @csrf
                            <div class="mb-3">
                                <label for="titleInput" class="form-label text-black">Título de la opinión</label>
                                <input type="text" class="form-control" id="titleInput" placeholder="Escribe el título" required maxlength="50" minlength="10" name="titulo">
                                <div class="form-text">
                                    El Título debe tener minimo 10 caracteres y un maximo de 50 caracteres
                                </div>
                            </div>
                            <div class="mb-3">

                                <label for="titleInput" class="form-label text-black">Puntuacion de satisfaccion</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    @for ($i = 0; $i < 1; $i++) <i class="fas fa-star text-primary me-1"></i>
                                        @endfor
                                        <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio1" value="1">
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio2" value="2">
                                    @for ($i = 0; $i < 2; $i++) <i class="fas fa-star text-primary me-1"></i>
                                        @endfor
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio3" value="3">
                                    @for ($i = 0; $i < 3; $i++) <i class="fas fa-star text-primary me-1"></i>
                                        @endfor
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio4" value="4">
                                    @for ($i = 0; $i < 4; $i++) <i class="fas fa-star text-primary me-1"></i>
                                        @endfor
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio5" value="5">
                                    @for ($i = 0; $i < 5; $i++) <i class="fas fa-star text-primary me-1"></i>
                                        @endfor
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="descriptionInput" class="form-label text-black">Opinión</label>
                                <textarea class="form-control" id="descriptionInput" placeholder="Detalla aqui tu reseña" rows="3" required minlength="30" maxlength="300" name="descripcion"></textarea>
                                @if ( Auth::check() )
                                <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}" id="id_usuario">
                                @endif

                                <div class="form-text">
                                    La Opinión debe tener minimo 30 caracteres y un maximo de 300 caracteres
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" form="formOpion">Enviar Opinión</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>


        <!--EN MODAL DE OPINIONES-->
        @livewire('asistencia')

        <!-- Whatsapp Button -->
        <a href="https://api.whatsapp.com/send?phone=50371921807&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20precios." class="float" target="_blank">
            <i class="fab fa-whatsapp my-float"></i>
        </a>
        <!-- End Whatsapp Button -->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class=" pb-0 pt-5" style="background-color: #c6ced1 !important">

            <div class="container">
                <div class="row">
                    {{-- <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0">
                        <a class="text-decoration-none" href="/">
                            <img src="{{ asset('images/gallery/AQ-new.png')}}" height="50" width="" /></a>
                        <p class="text-black my-4">La empresa que te acompaña en el crecimiento <br />del comercio electrónico.</p>
                    </div> --}}
                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
                        <h5 class="lh-lg fw-bold mb-4  font-sans-serif">Comunidad </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-black" href="#!"><i class="fab fa-blogger"></i> Blogs</a></li>
                            <li class="lh-lg"><a class="text-black" href="#!"><i class="fab fa-youtube"></i> Youtube</a></li>
                            <li class="lh-lg"><a class="text-black" href="#!"><i class="fab fa-facebook"></i> Facebook</a></li>
                            <li class="lh-lg"><a class="text-black" href="#!"><i class="fab fa-instagram"></i> Instagram</a></li>

                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold  mb-4 font-sans-serif">Servicios</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-black" href="{{ url('/servicios') }}">Diseño y creacion web</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ url('/servicios') }}">Soporte y mantenimiento</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ url('/servicios') }}">Aplicaciones de escritorio</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ url('/servicios') }}">Asesoria</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold  mb-4 font-sans-serif">Quienes Somos</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-black" href="{{ url('/sobre-nosotros') }}">Quienes somos</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ route('politicas') }}">Aviso de privacidad</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ route('terminosycondiciones') }}">Condiciones de uso</a></li>                            
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold  mb-4 font-sans-serif"> Contacto</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            {{-- <li class="lh-lg"><a class="text-black" href=" url('/sobre-nosotros')  }}">Sobre Nosotros</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ url('/servicios') }}">Servicios</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ url('/proyectos') }}">Proyectos</a></li> --}}
                            <li class="lh-lg"><a class="text-black" href="{{ url('/contacto') }}">Soporte técnico</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ url('/contacto') }}">Contactonos</a></li>
                            <li class="lh-lg"><a class="text-black" href="{{ url('/contacto') }}">Trabaja con nosotros</a></li>
                            {{-- <li class="lh-lg">Whatsapp: <a class="text-black" href="https://api.whatsapp.com/send?phone=50377948668" target="_blank">77948668</a></li>
                            <li class="lh-lg">Teléfono: <a class="text-black" href="tel:2305-9181">2305-9181</a></li>
                            <li class="lh-lg">Correo Electrónico: <a class="text-black" href="mailto:contacto@aquariusit-sv.com">contacto@aquariusit-sv.com</a></li>     --}}                        
                        </ul>
                    </div>
                    
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0" style="background-color: #c6ced1 !important">

            <div class="container">
                <div class="row justify-content-md-between justify-content-evenly py-4">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p id="fotter-text" class="fs--1 my-2 text-black"></p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end text-200">
                        </p>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->


    </main>




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts
    <script src="{{ asset('plugins/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/is/is.min.js') }}"></script>
    <script src="{{ asset('plugins/lottie/lottie-player.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('plugins/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <!-- ADDEDS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!--<script src="js/popper.min.js"></script>-->
    <script src="{{ asset('js/helpers.js') }}"></script>

    {{-- Temporal Added --}}
    <script>
        var showModal = (function() {
            var executed = false;
            if (localStorage.getItem('executed') === null) {
                localStorage.setItem('executed', false);
            }

            return function() {
                if (localStorage.getItem('executed') == 'false') {
                    executed = true;
                    localStorage.setItem('executed', true);
                    var temporalSModal = new bootstrap.Modal(document.getElementById('temporalModal'));
                    temporalSModal.show();
                }
            };
        })();

        window.addEventListener("DOMContentLoaded", function() {
            showModal();
            /* console.log(document.cookie) */
            /* $('#temporalModal').modal('show')
            console.log('entro') */
        });
    </script>



    <script>
        let Xmas = new Date();
        let year = Xmas.getFullYear();

        let fotter = document.getElementById('fotter-text').innerHTML = "Todos los derechos reservador &copy; Aquarius IT, 2021" + "-" + year;



        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



        var showHide = () => {

        }

        $(document).ready(function() {

            // Gets the video src from the data-src on each button
            console.log('hola')
            var $videoSrc;
            $('.video-btn').click(function() {
                $videoSrc = $(this).data("src");
            });
            console.log($videoSrc);



            // when the modal is opened autoplay it  
            $('#videoModal').on('shown.bs.modal', function(e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
            })



            // stop playing the youtube video when I close the modal
            $('#videoModal').on('hide.bs.modal', function(e) {
                // a poor man's stop video
                $("#video").attr('src', $videoSrc);
            })


            // document ready  
        });

    </script>
    @stack('scripts')
</body>

</html>

