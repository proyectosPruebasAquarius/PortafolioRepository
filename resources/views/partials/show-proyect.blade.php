@extends('app')


@section('content')


<section class="py-7 ">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div id="carouselExampleControls" class="carousel slide carousel--container mx-auto" data-bs-ride="carousel">
              <div class="carousel-inner rounded" {{-- style="box-shadow: 10px 0 5px -2px #888;" --}}>
                @foreach(json_decode($resource->imagen) as $key => $value)
                @if($key === 0)
                <div class="carousel-item carousel--background active">
                  <img src="{{ $value }}" class="d-block w-100 img-fluid f--img" alt="Project Image">
                </div>   
                @else
                <div class="carousel-item carousel--background">
                  <img src="{{ $value }}" class="d-block w-100 img-fluid f--img" alt="Project Image">
                </div>   
                @endif
                
                @endforeach         
              </div>
              @if(count(json_decode($resource->imagen)) > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              @endif
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h3 class="mt-5">{{ $resource->nombre }}</h3> 
            <p class="description--project">{{ $resource->descripcion }}</p>
          </div>
        </div>

        <div class="row p-3" >
          
            
            {{--<div class="col-12 col-md-6">
              <h3 class="description--project text-white" style="transform: skew(-20deg);">{{ $resource->nombre }}</h3>
            </div>
            <div class="col-12 col-md-6">
              <lottie-player src="{{ asset('animations/61339-responsive-web-design.json') }}" class="mt-5 mt-md-0" background="transparent"  speed="1"  style="width: 350px; height: 200px; transform: skew(-20deg);"  autoplay></lottie-player>
            </div>--}}
          
          <div class="p-2 p-md-3" style="background-color: #000;  transform: skew(20deg);">
            <h3 class="text-white text-center" style="transform: skew(-20deg); text-transform: capitalize;">
              Caracteristicas adactadas a tus necesidades
            </h3>
          </div>
        </div>
        
        <div class="row mt-5">
          <div class="col-12 col-md-6">
            <h4 class="text-danger text-start">
              Diseño Responsivo
            </h4>
            <p class="text-break">
              Diseño responsivo, podrás hacer uso de la pagina desde cualquier dispositivo, facilitando la comodidad y el uso de la pagina para ti y tus clientes. Olvidate del uso de un computador, para navegar. Ingresa desde una tablet, teléfono o ipad.
            </p>
            <ul>
              <li>
                Teléfonos
              </li>
              <li>
                Tablets
              </li>
              <li>
                Laptops
              </li>
              <li>
                PC
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <lottie-player src="{{ asset('animations/61339-responsive-web-design.json') }}" class="lottie-3 mx-auto" background="transparent"  speed="1" ></lottie-player>
          </div>
        </div>

        <div class="row mt-5" style="background: #eee; border-top-left-radius:30%; border-bottom-right-radius:30% ">
          <div class="col-12 col-md-6">
            <lottie-player src="{{ asset('animations/40220-website-seo-audit.json') }}" class="lottie-3 mx-auto" background="transparent"  speed="1" ></lottie-player>
          </div>

          <div class="col-12 col-md-6">
            <h4 class="text-danger text-start">
              SEO
            </h4>
            <p class="text-break">
              Facilita la busqueda en tus sitio, proporcionando un SEO limpio y optimizado para siempre proporcionar un posicionamiento en los buscadores web.
            </p>
            <ul>
              <li>
                Posicionamiento en buscadores web
              </li>
              <li>
                Multiplica tu visibilidad
              </li>
              <li>
                Rentabiliza tu web
              </li>
            </ul>
          </div>
                    
        </div>

        <div class="row mt-4 text-center">
          <div class="col-12">
            <a type="button" href="/contacto" class="btn btn-danger ">
              Contactanos
            </a>
          </div>
        </div>
      </div>
    </section>
</section>
  
 @push('scripts')
   <script>
     'use strict';
     
     document.addEventListener('scroll', (e) => {
       if (window.scrollY > document.getElementById('carouselExampleControls').offsetHeight / 2) {
        document.querySelectorAll('lottie-player').forEach((e) => {
          e.play();
        });
       }
     });
     
   </script>
 @endpush 


@endsection