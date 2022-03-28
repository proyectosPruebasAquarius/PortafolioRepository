@extends('app')


@section('content')
<section class="py-7 mt-7" container-xl="container-xl">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-4">
                  <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active border-bottom-0" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Generar link de venta</a>
                    {{-- <a class="list-group-item list-group-item-action border-bottom-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                    <a class="list-group-item list-group-item-action border-bottom-0" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                    <a class="list-group-item list-group-item-action " id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a> --}}
                  </div>
                </div>
                <div class="col-8">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h1>
                                    Generar enlaces de venta
                                </h1>
                                <p>
                                    Genera enlaces de venta, con los cuales tus clientes podrán acceder a realizar el pago. 
                                </p>
                            </div>
                            <div class="col-12 mx-auto text-center">
                                <form action="{{ route('generateBypass') }}" method="post">
                                    @csrf

                                    <button type="submit"class="btn btn-danger rounded-pill">
                                        <span>Generar Enlace</span>                                    
                                    </button>
                                </form>                                
                            </div>
                            @isset($url)
                            <div class="col-12 text-center">
                                <h4 class="mt-5">Enlace Generado</h4>
                                <lottie-player src="{{ asset('animations/42730-url-link.json') }}" class="mx-auto" background="transparent"  speed="1"  style="width: 200px; height: 200px;"  {{-- loop --}}  autoplay></lottie-player>
                                <div class="badge text-wrap" style="background-color: #c6ced1 !important">
                                    <h5 class="text-break text-dark" data-toggle="tooltip" data-placement="top" title="Copia la url">
                                        {{ $url }}
                                    </h5>
                                </div>
                                
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                  </div>
                </div>
              </div>
              
        </div>
    </section>
</section>
@endsection