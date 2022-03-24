@extends('app')

@section('content')
<section class="py-7" id="services" container-xl="container-xl">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
           @foreach ($data as $data)
           <?php
           $parameter =[
               'id' =>$data->id_opinion,
                ];
            $parameter= Crypt::encrypt($parameter);
        ?>
           <form method="POST" action="{{ url("/opinion/update/{$parameter}") }}" id="formOpion">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="titleInput" class="form-label text-black">Título de la opinión</label>
              <input type="text" class="form-control" value="{{$data->titulo}}" id="titleInput" placeholder="Escribe el título" required maxlength="50" minlength="10" name="titulo">
              <div class="form-text">
                El Título debe tener minimo 10 caracteres y un maximo de 50 caracteres
              </div>
            </div>
             @switch($data->puntuacion)
                  @case(1)
                  <div class="mb-3">

                    <label for="titleInput" class="form-label text-black">Puntuacion de satisfaccion</label>
                    <br>
                    <div class="form-check form-check-inline">
                      @for ($i = 0; $i < 1; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio1E" value="1" checked>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio2E" value="2">
                      @for ($i = 0; $i < 2; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio3E" value="3" >
                      @for ($i = 0; $i < 3; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio4E" value="4" >
                      @for ($i = 0; $i < 4; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio5E" value="5" >
                      @for ($i = 0; $i < 5; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                  </div>
                      @break

                  @case(2)
                  <div class="mb-3">

                    <label for="titleInput" class="form-label text-black">Puntuacion de satisfaccion</label>
                    <br>
                    <div class="form-check form-check-inline">
                      @for ($i = 0; $i < 1; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio1E" value="1" >
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio2E" value="2" checked>
                      @for ($i = 0; $i < 2; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio3E" value="3" >
                      @for ($i = 0; $i < 3; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio4E" value="4" >
                      @for ($i = 0; $i < 4; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio5E" value="5" >
                      @for ($i = 0; $i < 5; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                  </div>
                      @break

                  @case(3)
                  <div class="mb-3">

                    <label for="titleInput" class="form-label text-black">Puntuacion de satisfaccion</label>
                    <br>
                    <div class="form-check form-check-inline">
                      @for ($i = 0; $i < 1; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio1E" value="1" >
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio2E" value="2">
                      @for ($i = 0; $i < 2; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio3E" value="3" checked>
                      @for ($i = 0; $i < 3; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio4E" value="4" >
                      @for ($i = 0; $i < 4; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio5E" value="5" >
                      @for ($i = 0; $i < 5; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                  </div>
                  @break
                  @case(4)
                  <div class="mb-3">

                    <label for="titleInput" class="form-label text-black">Puntuacion de satisfaccion</label>
                    <br>
                    <div class="form-check form-check-inline">
                      @for ($i = 0; $i < 1; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio1E" value="1" >
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio2E" value="2">
                      @for ($i = 0; $i < 2; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio3E" value="3" >
                      @for ($i = 0; $i < 3; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio4E" value="4" checked >
                      @for ($i = 0; $i < 4; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio5E" value="5" >
                      @for ($i = 0; $i < 5; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                  </div>
                  @break
                  @case(5)
                  <div class="mb-3">

                    <label for="titleInput" class="form-label text-black">Puntuacion de satisfaccion</label>
                    <br>
                    <div class="form-check form-check-inline">
                      @for ($i = 0; $i < 1; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio1E" value="1" >
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio2E" value="2">
                      @for ($i = 0; $i < 2; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio3E" value="3" >
                      @for ($i = 0; $i < 3; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio4E" value="4" >
                      @for ($i = 0; $i < 4; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="puntuacion" id="inlineRadio5E" value="5" checked >
                      @for ($i = 0; $i < 5; $i++)
                      <i class="fas fa-star text-primary me-1"></i>
                       @endfor
                    </div>
                  </div>
                  @break
              @endswitch
            
            <div class="mb-3">
              <label for="descriptionInput" class="form-label text-black">Opinión</label>
              <textarea class="form-control" id="descriptionInput" placeholder="Detalla aqui tu reseña" rows="5" required minlength="30" maxlength="300" name="descripcion">{{$data->descripcion}}</textarea>
              <div class="form-text">
                La Opinión debe tener minimo 30 caracteres y un maximo de 300 caracteres
              </div>
              <input type="hidden" name="user_id" value="{{$data->user_id}}">
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ url()->previous() }}" type="button" class="btn btn-warning">Regresar</a>
           
          </form>  
           @endforeach
            
        </div>
    </div>
</section>
@endsection