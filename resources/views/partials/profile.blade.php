@extends('app')

@section('content')

<section class="py-7" id="services" container-xl="container-xl">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    @foreach ($user as $s)
                    <span class="font-weight-bold">{{ $s->name}}</span>
                    <span class="text-black-50">fecha de Creacion: {{ date('d-m-Y', strtotime($s->created_at))}}</span>
                   
                    @endforeach
                    
                </div>
            </div>
            <section class="py-7">
                <div class="container-fluid">
                  <div class="row flex-center">
                    <div class="col-md-8 col-lg-5 text-center">
                      
                      <h2>Mis Opiniones </h2>
                    </div>
                    
                  </div>
                 
                    <div class="card-group pt-5 text-center">
                        @foreach ($data as $d)
                        <div class="card mx-3">
                          <div class="card-body">
                            <h5 class="card-title">{{$d->titulo}}</h5>
                            <p class="card-text">
                                {{$d->descripcion}}
                            </p>
                          </div>
                          <div class="card-footer text-center">
                              <div>
                                  Puntuacion
                                  <br>
                                  @for ($i = 0; $i < $d->puntuacion; $i++)
                                  <i class="fas fa-star text-primary me-1"></i>
                                   @endfor
                              </div>
                              <div>
                                  Fecha de Publicacion:
                                  <br>
                                  <h5 class="text-muted">
                                      {{ date('d-m-Y', strtotime($d->created_at))}}
                                     </h5>
                                     <div>
                                      <form id="formDel" method="POST" action="{{ url("/opinion/delete/{$d->id_opinion}") }}">
                                        @csrf
                                        @method('DELETE')
                                        
                                      </form>
                                      <div class="mx-auto text-center">
                                        <button type="submit" class="btn btn-success" form="formDel"><i class="fal fa-trash-alt"></i></button>
                                        <?php
                                        $parameter =[
                                            'id' =>$d->id_opinion,
                                              ];
                                          $parameter= Crypt::encrypt($parameter);
                                      ?>
                                        <a href="{{ url("/opinion/edit/{$parameter}") }}"class="btn btn-warning"> <i class="fal fa-comment-alt-edit"></i></a>
                                       
                                      </div>
                                     </div>                          
                              </div>                             
                          </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="m-4">
                  <nav>
                      <ul class="pagination justify-content-center">
                        {{ $data->links() }}
                      </ul>
                  </nav>
              </div>
              </section>
        </div>
    </div>
</section>
@endsection