@extends('app')


@section('content')

<section class="py-7" id="services" container-xl="container-xl">

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 text-center mb-3">
        <div class="container-text">
          <div class="title-text">Proyectos</div>
          <div class="subtitle">Proyectos creados por nuesta Empresa</div>
        </div>
        {{-- Start For Condition --}}
        @if(Auth::check())
          @if(Auth::user()->id_tipo_usuario === 1)
            <button type="button" class="btn btn-primary" onclick="showHide()">Todos los proyectos <i
              class="fas fa-project-diagram"></i></button>
          @endif 
        @endif        
        {{-- End For Condition --}}
      </div>
    </div>
    

    <div class="row h-100 justify-content-center">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($registros as $r)
          <div class="col-12 col-md-6 col-lg-4" style="--image-style: url({{ json_decode($r->imagen)[0] }})">
            <div class='card_default'>
              <div class='info'>
                <h1 class='title'><a href="/proyectos/{{ Crypt::encrypt($r->id) }}">{{ $r->nombre }}</a></h1>
                <p class='description'>{{ substr($r->descripcion, 0, 300) }}... <br><a href="/proyectos/{{ Crypt::encrypt($r->id) }}" type="button" class="btn btn-outline-danger rounded-pill mt-3">Ver mas</a></p>                
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 col-md-6-col-lg-4 text-center">
            <p>Ocurrió un error, proyectos no disponibles...</p>
          </div>
        @endforelse
        
      </div>
    </div>
    @if(Auth::check())
      @if(Auth::user()->id_tipo_usuario === 1)

    <div class="content-table">

      <div class="container">
        <h2 class="mb-5">Todos los Proyectos</h2>


        <div class="table-responsive custom-table-responsive">
          <button data-bs-toggle="modal" type="button" class="btn btn-default"data-bs-target="#myModal" onclick="modal()"><i
              class="icon-add">Agregar</i></button>
          <table class="table custom-table">
            <thead>
              <tr>

                {{-- <th scope="col">
                  <label class="control control--checkbox">
                    <input type="checkbox" class="js-check-all" />
                    <div class="control__indicator"></div>
                  </label>
                </th> --}}

                <th scope="col">Imagen</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Video</th>
                <th scope="col">Pantalla Principal</th>
                <th scope="col">Acciones</th>
                <!--<th scope="col"><a href="#" class="btn btn-main"><span class="icon-add"></span> Agregar Nuevo</a></th>-->
              </tr>
            </thead>
            <tbody>
              @if(isset($registros))
              @foreach ($registros as $r)
              <tr scope="row">
                {{-- <th scope="row">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </th> --}}

                <td>
                  <div class="avatars">
                    @foreach(json_decode($r->imagen) as $v)
                    <img class="img-thumbnail rounded-circle avatar-frame " src="{{ $v }}"
                      alt="Image Project">
                    @endforeach
                  </div>

                </td>
                <td>{{ $r->nombre }}</td>
                <td>
                  @if(strlen($r->descripcion) > 100)
                    {{ substr($r->descripcion,0 , 100) }}...
                  @else
                    {{ $r->descripcion }}  
                  @endif
                  
                  {{-- <small class="d-block">Far far away, behind the word mountains</small> --}}
                </td>
                <td>
                  <div class="video-button">
                    <button type="button" class="btn btn-default video-btn" data-src="{{ $r->url }}" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="fas fa-play text-primary"></i></button>
                  </div>
                </td>
                <td>
                  <i class="{{ $r->visible == 1 ? 'far fa-circle' : 'fal fa-times-circle' }}"></i>
                </td>
                <td><button onclick="modal('update', {{ $r->id }}, {{ $r }})" class="btn btn-success  btn-sm"><span
                      class="icon-pencil"></span></button>&nbsp;&nbsp;<button class="btn btn-danger  btn-sm" onclick="deleteElement({{ $r->id }})"><span
                      class="icon-trash"></span></button></td>

              </tr>
              <tr class="spacer">
                <td colspan="100"></td>
              </tr>
              @endforeach
              @else
              <tr scope="row">
                <th colspan="5" class="text-center">No se encontraron registros</th>
              </tr>
              <tr class="spacer">
                <td colspan="100"></td>
              </tr>
              @endif

            </tbody>
          </table>
        </div>


      </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog bg-gray-dark" role="document">
        <div class="modal-content">
          <div class="modal-header">            
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/proyectos" method="POST" id="proyectosF" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="avatars" id="wrapperImg"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputName2">Nombre:</label>
                    <input type="text" name="nombre" class="form-control " placeholder="Nombre" id="nombre" required>
                  </div>
                  <div class="col-md-6">
                    <label for="exampleInputName2">Imagenes:</label>
                    <input type="file" name="imagen[]" class="form-control " accept="image/*" multiple="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputName2">Imagen Titulo:</label>
                    <input type="file" name="title_img" class="form-control">
                  </div>
                  <div class="col-md-6 checkbox--custom">
                    <div class="form-check">
                      <input class="form-check-input" name="visible" type="checkbox" value="1" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                        Visible en pantalla principal
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="exampleInputName2">URL Video:</label>
                    <input type="url" name="url" class="form-control"
                      placeholder="Ejemplo: https://www.youtube.com/watch?v=SMM1WhmlQzI" id="url">
                  </div>
                </div>
                <label for="exampleInputName2">Descripción:</label>
                <textarea class="form-control" name="descripcion" rows="3" placeholder="Descripción del Proyecto..."
                  id="descripcion" required></textarea>

              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cerrar</button>
            <input type="submit" class="btn btn-primary" form="proyectosF" placeholder="Guardar" id="btnSOU" />
            <!--<button type="submit" class="btn btn-primary" id="btnToEOS">Guardar</button>-->
          </div>
        </div>
      </div>
    </div>
    <!--End Modal -->

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          
          <div class="modal-body">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>        
            <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
    </div>
            
            
          </div>

        </div>
      </div>
    </div> 
    <!-- End Modal Video -->
      @endif
    @endif
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

@endsection

@push('scripts')
<script>
  $(document).ready(function(){
  var mouseX, mouseY;
  var ww = $( window ).width();
  var wh = $( window ).height();
  var traX, traY;
  $(document).mousemove(function(e){
    mouseX = e.pageX;
    mouseY = e.pageY;
    traX = ((4 * mouseX) / 570) + 40;
    traY = ((4 * mouseY) / 570) + 50;
    /* console.log(traX); */
    $(".title-text").css({"background-position": traX + "%" + traY + "%"});
  });
  document.addEventListener("touchmove", (e) => {
    mouseX = e.pageX;
    mouseY = e.pageY;
    traX = ((4 * mouseX) / 570) + 40;
    traY = ((4 * mouseY) / 570) + 50;
    /* console.log(traX); */
    $(".title-text").css({"background-position": traX + "%" + traY + "%"});
  });
});
</script>
@endpush