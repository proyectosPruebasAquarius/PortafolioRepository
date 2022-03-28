@extends('app')


@section('content')
 <!--SECCTION DE HOME-->

 <section class="py-xxl-10 pb-0" id="home" style="height: 100vh;">
   <!-- <div class="bg-holder bg-size" style="background-image:url(images/illustrations/code-orange.svg);background-position:top center;background-size:cover;">
    </div>-->
    <!--/.bg-holder-->
   
    <div class="bg-holder bg-size" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 1) 0%,rgba(243,0,246,0) 90%), url(images/illustrations/bg-code-3.jpg);background-position:top center;background-size:cover; /* margin-top: 80px */">
    </div>
    <div class="container">
      
        <div class="row">
          <div class="col-12 text-center" style="position: absolute; top: 20vh; /* right: 0;  */">
            <h1 class="fw-normal fs-6 fs-xxl-7 text-white">Te acopañamos en tu</h1>
            <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2 text-white">empresa o negocio.</h1>
          </div>
        </div>
      
    </div>
  </section>


 
  <section class="pt-7 pb-7 bg-gray" {{-- style="border-bottom-left-radius: 50%" --}}>
    <div class="services">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                <h2>Servicios</h2>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="box p-5 rounded"> 
                      <i class="fas fa-laptop-code fa-3x mb-4 text-danger"></i>
                      <h4>Desarrollo de Sitios Web</h4>
                      <p>Creamos la web para tú empresa o negocio</p>
                      <a class="readmore text-danger" href="{{ url('servicios') }}">
                        <span>Más Información</span>
                      </a>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="box p-5 rounded"> 
                      <i class="fas fa-wrench fa-3x mb-4 text-danger"></i>
                      <h4>Soporte y Mantenimiento Web</h4>
                      <p>Soporte y mantenimiento de tú sitio web</p>
                      <a class="readmore text-danger" href="{{ url('servicios') }}">
                        <span>Más Información</span>
                      </a>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="box p-5 rounded"> 
                      <i class="fas fa-headset  fa-3x mb-4 text-danger"></i>
                      <h4>Asesoria</h4>
                      <p>Asesoria sobre hardware para tú empresa</p>
                      <a class="readmore text-danger" href="{{ url('servicios') }}">
                        <span>Más Información</span>
                      </a>
                  </div>
              </div>              
          </div>
      </div>
    </div>
  </section>



  <!-- ============================================-->
  <!-- <section> begin ============================-->
 
  <!-- <section> close ============================-->
  <!-- ============================================-->




  <!-- ============================================-->
  <!-- <section> begin ============================-->
    <section>

      <div class="container">
        <div class="row">
          <div class="col col-md-12 offset-md-1 col-lg-8 offset-lg-2">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                @foreach($embedded as $key => $value)
                
                  @if ($loop->first)
                  <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}" class="active"></li>
                  @else
                  <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}"></li>
                  @endif
  
                @endforeach
              </ol>
              <div class="carousel-inner" role="listbox">
          
                @foreach($embedded as $key => $value)
                
                  @if ($loop->first)
                    <div class="carousel-item active">
                  @else
                    <div class="carousel-item">
                  @endif
                  <div class="ratio ratio-16x9">
                    <iframe src="{{ $value->url }}" title="YouTube video" allowfullscreen></iframe>
                  </div>
                </div>  
                @endforeach              
          
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->
  
    </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->
  <section class="pt-7 pb-0">

    <div class="container">
      <div class="row">
        <div class="col-6 col-lg mb-5">
          <div class="text-center">
            <i class="fal fa-folder fa-5x"></i> 
            <h1 class="text-primary mt-4">50</h1>
            <h5 class="text-800">Proyectos</h5>
          </div>
        </div>
        <div class="col-6 col-lg mb-5">
          <div class="text-center"><img src="images/icons/states.png" alt="..." />
            <h1 class="text-primary mt-4">65+</h1>
            <h5 class="text-800">States covered</h5>
          </div>
        </div>
        <div class="col-6 col-lg mb-5">
          <div class="text-center">
            <i class="fal fa-address-card fa-5x"></i>
            <h1 class="text-primary mt-4">1000</h1>
            <h5 class="text-800">Clientes</h5>
          </div>
        </div>
        <div class="col-6 col-lg mb-5">
          <div class="text-center"><img src="images/icons/goods.png" alt="..." />
            <h1 class="text-primary mt-4">130M+</h1>
            <h5 class="text-800">Goods delivered</h5>
          </div>
        </div>
        <div class="col-6 col-lg mb-5">
          <div class="text-center"><img src="images/icons/business.png" alt="..." />
            <h1 class="text-primary mt-4">130M+</h1>
            <h5 class="text-800">Business hours</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- end of .container-->

  </section>



  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="py-7">

    <div class="container-fluid">

      <div class="row flex-center">
        <div class="bg-holder bg-size" style="background-image:url(images/gallery/quote.png);background-position:top;background-size:auto;margin-left:-270px;margin-top:-45px;">
        </div>
        <!--/.bg-holder-->
        <div class="col-md-8 col-lg-5 text-center">          
          <h2>Opiniones de los Clientes</h2>
        </div>
      </div>  

      <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row h-100">
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it.</p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row h-100">
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png') }}" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row h-100">
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">“I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100 card-span p-3">
                  <div class="card-body">
                    <h5 class="mb-0 text-primary">Fantastic service!</h5>
                    <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                    <div class="d-xl-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                      <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                          <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row px-3 px-md-0 mt-6">
          <div class="col-12 position-relative">
            <ol class="carousel-indicators">
              <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
              <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end of .container-->

  </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->


@endsection

@push('scripts')
  <script>
    'use strict';
    document.addEventListener('scroll', (e) => {
      /* console.log(window.scrollY); */
      if (window.scrollY > document.getElementById('home').offsetHeight) {
        document.querySelector('nav').classList.remove('navbar-dark');
        document.querySelector('nav').classList.add('navbar-light');
      } else {
        document.querySelector('nav').classList.remove('navbar-light');
        document.querySelector('nav').classList.add('navbar-dark');
      }
    })
  </script>
@endpush