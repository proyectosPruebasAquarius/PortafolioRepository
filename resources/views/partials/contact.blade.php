@extends('app')


@section('content')
<section class="py-7" id="services" container-xl="container-xl">

 <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section>

            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 col-xl-4"><img src="images/illustrations/sent-mail.svg" alt="..." />
                  <h5 class="text-black">Contacta Con Nosotros</h5>
                  
                  <p class="text-muted">Lunes a Viernes 8:00 am a 5:00 pm.</p>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4">
                  <form class="row" method="POST" action="{{ url('/contacto/add') }}" >
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                      <label class="form-label" for="inputName">Nombre de la persona de Contacto</label>
                      <input class="form-control form-quriar-control" id="inputName" type="text" min="10" maxlength="50" name="nombre" placeholder="Escribe tu nombre" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="inputEmail">Correo de Contacto</label>
                      <input class="form-control form-quriar-control" id="inputEmail" type="email" name="correo" placeholder="Escribe tu correo"/>
                    </div>
                    <div class="mb-5">
                      <label class="form-label" for="inputPhone">Numero de telefono de Contacto</label>
                      <input class="form-control form-quriar-control" id="inputPhone" maxlength="12"  name="telefono" placeholder="Escribe tu telefono" />
                    </div>
                   
                    <div class="mb-5">
                      
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="tipo_persona">
                          <option selected disabled>Seleciona</option>
                          <option value="Persona Natural">Persona Natural</option>
                          <option value="persona Juridica">persona Juridica</option>
                         
                        </select>
                        <label class="form-label text-black" for="floatingSelect">Tipo de pesona</label>
                      </div>
                    </div>
                   
                    <div class="mb-5">
                      <label class="form-label visually-hidden" for="validationTextarea">Mensaje</label>
                      <textarea class="form-control form-quriar-control " id="validationTextarea" placeholder="Escriba su Mensaje" style="height: 150px" maxlength="1000" name="mensaje" required="required"></textarea>
                    </div>
                    <div class="d-grid">
                      <button class="btn btn-primary text-black" type="submit">Enviar<i class="fas fa-paper-plane ms-2"></i></button>
                    </div>
                    


                  </form>
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
                  
                  <td>{{$contacto->tipo_persona}}</td>
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