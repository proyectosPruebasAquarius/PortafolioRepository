@extends('app')

@section('content')
<section class="py-7" id="services" container-xl="container-xl">
    <div class="container marketing">

      
      
        <!-- Three columns of text below the carousel -->
        <div class="row featurette mt-5">
          <div class="col-lg-6">

            <div>
              <img src="{{ asset('images/illustrations/mision_target.svg') }}" class="d-inline mb-3" alt="Mision de la empresa" width="40" height="40" style="color:#f95c19">
              
      
              <h2 class="text-justify d-inline">Misión</h2>
            </div>
            <p class="text-justify">
              Asesorar a nuestros clientes en la implementación de la tecnología de la información aplicada a su empresa, manteniendo su identidad en la web innovando sus procesos administrativos y ventas online, facilitándoles herramientas que contribuyan a su crecimiento en el mercado.
            </p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <div>
              <img src="{{ asset('images/illustrations/eyeglasses.svg') }}" class="d-inline mb-3" alt="Valores  de la empresa" width="40" height="40">
    
              <h2 class="text-justify d-inline">Visión</h2>
            </div>
            <p class="text-justify">
              Ser una empresa con responsabilidad social, líder en la creación de sistemas informáticos que fusione sectores que coinciden en un mismo interés, de esta manera nos beneficiamos todos.
            </p>
            
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        
    
        
    
        <hr class="featurette-divider d-none">
    
        <div class="row featurette d-none">
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