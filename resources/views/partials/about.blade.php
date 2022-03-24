@extends('app')

@section('content')
<section class="py-7" id="services" container-xl="container-xl">
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row text-center">
          <div class="col-lg-6">

            <img src="{{ asset('images/illustrations/mision.svg') }}" alt="Mision de la empresa" width="140" height="140">
            
    
            <h2>Misión</h2>
            <p>Acompañarle a que forme parte del espacio cibernético, sin importar el tamaño de su empresa o negocio.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img src="{{ asset('images/illustrations/valores.svg') }}" alt="Valores  de la empresa" width="140" height="140">
    
            <h2>Valores</h2>
            <p>Transparencia, excelencia, libertad, escucha, responsabilidad, lealtad, pasión, trabajo en equipo.</p>
            
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-12 col-md-7">
            <h2 class="featurette-heading">Nuestra Ubicación.</h2>
            <p class="lead">
               Estamos ubicados en 4ª Calle Oriente, Chalatenango, Chalatenango El Salvador.

               <ul>
                 <li>
                   
                   <span style="font-weight:bold;">
                    Horarios:
                   </span>
                    8:00 am - 5:00 pm.
                 </li>
                 
                 <li>
                  <span style="font-weight:bold;">
                    Horarios Sabado:
                  </span>
                 8:00 am - 12:00 md.
                 </li>
                 <li>
                  <span style="font-weight:bold;">
                    Teléfono:
                  </span>
                   <a href="tel:2332-3232">2332-3232</a>
                 </li>
               </ul>
            </p>
          </div>
          <div class="col-12 col-md-5">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d241.91375194952846!2d-88.93700446612296!3d14.040523063255392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8f6365da76e4ae8d%3A0xb526927bae7d0d75!2s23R7%2B57G%20BL%20Makeup%20%26%20More*21%2C%20Chalatenango%20CP%201301!3m2!1d14.0404474!2d-88.9368097!5e0!3m2!1ses-419!2ssv!4v1646345328431!5m2!1ses-419!2ssv" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="py-5 team4">
            <div class="container">
              <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                  <h3 class="mb-3">Conoce Nuestro Equipo de Profesionales</h3>
                  <h6 class="subtitle">Contamos con un equipo de expertos, con los conocimientos y experiencia que necesitas.</h6>
                </div>
              </div>
              <div class="row">
                <!-- column  -->
                <div class="col-lg-4 mb-4">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-md-12">
                      <img src="{{ asset('images/illustrations/ceo.svg') }}" alt="wrapkit" class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="pt-2">
                        <h5 class="mt-4 font-weight-medium mb-0">Elia</h5>
                        <h6 class="subtitle mb-3">CEO</h6>
                        <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                        <ul class="list-inline">
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 facebook"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 twitter"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 github"><i class="fab fa-github"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Row -->
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-4 mb-4">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-md-12">
                      <img src="{{ asset('images/illustrations/dev_2.svg') }}" alt="wrapkit" class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="pt-2">
                        <h5 class="mt-4 font-weight-medium mb-0">Jose A. Alas</h5>
                        <h6 class="subtitle mb-3">Full Stack Developer</h6>
                        <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                        <ul class="list-inline">
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 facebook"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 twitter"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 github"><i class="fab fa-github"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Row -->
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-4 mb-4">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-md-12">
                      <img src="{{ asset('images/illustrations/dev_1.svg') }}" alt="wrapkit" class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="pt-2">
                        <h5 class="mt-4 font-weight-medium mb-0">Diego</h5>
                        <h6 class="subtitle mb-3">Full Stack Developer</h6>
                        <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                        <ul class="list-inline">
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 facebook"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 twitter"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1 github"><i class="fab fa-github"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Row -->
                </div>
                <!-- column  -->
                
              </div>
            </div>
          </div>
        </div>
    
      <!--  <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">
                And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id tincidunt elit. Aliquam eget neque elit. Etiam eu turpis eget risus iaculis dapibus vel ac lacus. Ut pretium, sapien ut vulputate mattis, eros purus sollicitudin enim, sed sagittis purus nunc in est. Curabitur sit amet nunc eu mauris convallis pulvinar id id felis. Fusce semper metus eget quam tincidunt, vel rutrum turpis aliquet. Quisque at sem pulvinar, dapibus ligula vitae, viverra diam. Fusce imperdiet feugiat libero mattis faucibus. Sed id nisl lorem. Donec rhoncus dolor in elit suscipit, vel volutpat mi feugiat. Sed eget placerat justo. Donec nunc magna, tempus.
            </p>
          </div>
          <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    
          </div>
        </div>
    
        <hr class="featurette-divider">
      -->
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->
    
</section>
@endsection