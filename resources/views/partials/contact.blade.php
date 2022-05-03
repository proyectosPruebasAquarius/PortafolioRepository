@extends('app')


@section('content')
<section class="py-1" id="services" container-xl="container-xl">

 <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section>

            <div class="px-3">
              {{-- <div class="row text-center mb-3">
                <div class="col-12">
                  <h5 class="text-black">Contáctanos</h5>
                  <p class="text-muted">Lunes a Viernes 8:00 am a 5:00 pm.</p>
                  <img src="images/illustrations/sent-mail.svg" alt="..." class="img-fluid mx-auto" height="150" width="150" />  
                </div>
              </div> --}}
              <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 col-xl-4 me-3">
                  <div class="card shadow h-100"{{--  style="background: #c6ced1" --}}>
                    <div class="card-body  mt-5">
                      <h5 class="text-black">Contáctanos</h5>
                      <img src="images/illustrations/sent-mail.svg" alt="..." class="img-fluid mb-2" height="150" width="150" />  
                      @livewire('contact-form')
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-5 col-xl-4 mt-3 mt-md-0 ms-3">
                  
                  <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d241.91375194952846!2d-88.93700446612296!3d14.040523063255392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8f6365da76e4ae8d%3A0xb526927bae7d0d75!2s23R7%2B57G%20BL%20Makeup%20%26%20More*21%2C%20Chalatenango%20CP%201301!3m2!1d14.0404474!2d-88.9368097!5e0!3m2!1ses-419!2ssv!4v1646345328431!5m2!1ses-419!2ssv" style="border:1px solid rgba(0, 0, 0, 0.125); box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; border-radius: 0.5rem" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                    </div>
  
                    <div class="col-12 col-md-12">
                      <h2 class="featurette-heading">Nuestra Ubicación.</h2>
                      <p class="lead">
                         4ª Calle Oriente, Casa 2, Barrio San Antonio, Chalatenango, Chalatenango, El Salvador.
            
                         <ul>
                            <li style="list-style: none; font-weight:bold;">
                              Nuestro Horario:
                            </li>
                           <li>
                             
                             <span style="font-weight:bold;">
                              Lunes - Viernes:
                             </span>
                              8:00 - 17:00 horas.
                           </li>
                           
                           <li>
                            <span style="font-weight:bold;">
                              Sabado:
                            </span>
                              8:00 - 12:00 horas.
                           </li>
                           <li>
                            <span style="font-weight:bold;">
                              Teléfono:
                            </span>
                             <a href="tel:+5032305-9181" class="text-dark">+503 2305-9181</a>
                           </li>
                         </ul>
                      </p>
                    </div>
                  </div>
                                  
                </div>                
              </div>
            </div>
            <!-- end of .container-->
    
          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->
       

        @if (Auth::check())
            @if ( Auth::user()->id_tipo_usuario == 1)
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Interes</th>
                  <th scope="col">Tipo de Persona</th>
                  <th scope="col">Mensaje</th>
                  <th scope="col">Fecha de recepcion</th>
                  <th scope="col">Accion</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contactos as $contacto)
                <tr>
                  <th >{{$contacto->nombre}}</th>
                  <td>{{$contacto->correo}}</td>
                  <td>{{$contacto->telefono}}</td>
                  <td>{{$contacto->empresa}}</td>
                  
                  <td>
                    <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$contacto->mensaje}}">
                    <i class="fal fa-comments"></i>
                    </button>
                  </td>
                  <td>
                    {{ date('d-m-Y', strtotime($contacto->created_at))}}
                  </td>
                  <td>
                    <form id="formDelContact" method="POST" action="{{ url("/contacto/delete/{$contacto->id}") }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" form="formDelContact"><i class="fal fa-trash-alt"></i></button>
                    </form>

                  </td>
                </tr>
                @endforeach
               
              
              
              </tbody>
              <div class="m-4">
                <nav>
                    <ul class="pagination justify-content-center">
                      {{ $contactos->links() }}
                    </ul>
                </nav>
            </div>
            </table>
            
            @endif
             
        @else
            
        @endif
         
</section>
    
    
@endsection