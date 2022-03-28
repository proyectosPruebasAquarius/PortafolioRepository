@extends('app')

@section('content')
@if(session('payState'))
    @php
        $state = session('payState');
    @endphp
    {{-- {{ session('payState') }} --}}
@endif
<section class="py-7 mt-7"  container-xl="container-xl">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-danger">Opciones de pagos</h2>
            </div>
            <div class="col-12">
                <div class="row no-gutters" style="background: #eee; border-bottom-right-radius: 50%">
                    <div class="col-12 col-md-6">
                        <div class="container">
                            <p style="position: relative; top: 10vh; font-weight:400">
                                <span style="font-size: 20px; font-weight: bold;">Pagos Rapidos, Directos y Sencillos:</span><br>
                                Paga de forma segura, atravez de las diferentes opciones de pagos que ponemos a tú disposición. 
                                Recuerda hacer una captura de pantalla del comprobante de pago, generado por la aplicación o en caso  
                                de transferencia bancaria directa realiza una foto al comprobante. 
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <lottie-player src="{{ asset('animations/23730-3d-mobile-payment.json') }}" class="mt-5 mt-md-0" background="transparent"  speed="1"  style="width: 300px; height: 300px;"  {{-- loop --}}  autoplay></lottie-player>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="text-primary">Chivo Wallet</h4>
                            </div>
                            <div class="col-12 col-md-6 mx-auto text-center">
                                {{-- <img src="{{ asset('images/qr/chivo-usd.png') }}" alt="chivo-usd" class="img-fluid"> --}}
                                {{-- <button type="button" class="btn rounded-pill text-white" style="background: #6B8068">
                                    USD
                                </button>
                                <button type="button" class="btn rounded-pill" style="background: #ffaf0f">
                                    BTC
                                </button> --}}
                                <div class="card text-center" style="background: #6B8068">
                                  <img class="card-img-top img-fluid rounded" src="{{ asset('images/qr/chivo-usd.png') }}" alt="chivo-usd">
                                  <div class="card-body">
                                    <h4 class="card-title">USD</h4>
                                    {{-- <p class="card-text">Body</p> --}}
                                  </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mx-auto text-center mt-2 mt-md-0">
                                {{-- <img src="{{ asset('images/qr/chivo-usd.png') }}" alt="chivo-usd" class="img-fluid"> --}}
                                {{-- <button type="button" class="btn rounded-pill text-white" style="background: #6B8068">
                                    USD
                                </button>
                                <button type="button" class="btn rounded-pill" style="background: #ffaf0f">
                                    BTC
                                </button> --}}
                                <div class="card text-center" style="background: #ffaf0f">
                                  <img class="card-img-top img-fluid rounded" src="{{ asset('images/qr/chivo-btc.png') }}" alt="chivo-btc">
                                  <div class="card-body">
                                    <h4 class="card-title">BTC</h4>
                                    {{-- <p class="card-text">Body</p> --}}
                                  </div>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-md-6" style="height: ">
                                <img src="{{ asset('images/qr/chivo-btc.png') }}" alt="chivo-btc" class="img-fluid">
                                <button type="button" class="btn btn-primary rounded-pill">
                                    BTC
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5" id="agricolaWrapp">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="text-primary">Banco Agricola</h4>
                            </div>
                            <div class="col-12 col-md-6 mx-auto text-center">                                
                                <div class="card text-center">
                                  <img class="card-img-top img-fluid rounded" src="{{ asset('images/qr/chivo-usd.png') }}" alt="chivo-usd">
                                  <div class="card-body">
                                    <h4 class="card-title">QR</h4>                                    
                                  </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 mx-auto text-center mt-2 mt-md-0">                                
                                <div class="card text-center">
                                  {{-- <img class="card-img-top img-fluid rounded" src="{{ asset('images/qr/chivo-usd.png') }}" alt="chivo-usd"> --}}
                                  <div class="card-body">
                                    <h4 class="card-title">Transferencia a cuenta</h4>
                                    <input type="text" disabled class="form-control" placeholder="12345678912">                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <lottie-player id="player" class="mx-auto lottie-2" background="transparent"  speed="1" autoplay  {{-- loop --}} ></lottie-player>
                    </div>
                    <div class="col-12">
                        <p>
                            Estas cerca de ser parte de intenet, realiza el pago y rellena el formulario; uno de nuestros agentes se pondra en contacto.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" style="margin-top: 15vh">
                <form action="{{ route('store.venta') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="nombres">Nombre *</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombres" name="nombre" required>
                                @error('nombre')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="email">Correo Electrónico *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                            </div>
                            @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono *</label>
                                <input type="number" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" required>
                                @error('telefono')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="total">Monto $ *</label>
                                <input type="number" class="form-control @error('total') is-invalid @enderror" id="total" name="total" required>
                                @error('total')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="imagen">Comprobante *</label>
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control @error('imagen') is-invalid @enderror" id="imagen" name="imagen" required>
                                @error('imagen')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="id_transferencia">ID de la transferencia *</label>
                                <input type="text" class="form-control @error('id_transferencia') is-invalid @enderror" id="id_transferencia" name="id_transferencia" required>
                                @error('id_transferencia')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck" onchange="handleChange(this);" name="is_fiscal" value="1" @error('giro') checked @enderror @error('nrc') checked @enderror @error('nit') checked @enderror>
                                  <label class="form-check-label text-danger" for="gridCheck">
                                    Crédito Fiscal
                                  </label>
                                </div>
                            </div>
                        </div>

                        <div class="d-none row mb-2" id="wrapper">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nit">NIT *</label>
                                    <input type="text" class="form-control @error('nit') is-invalid @enderror" id="nit" name="nit">
                                    @error('nit')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nrc">NRC *</label>
                                    <input type="text" class="form-control @error('nrc') is-invalid @enderror" id="nrc" name="nrc">
                                    @error('nrc')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="giro">Giro *</label>
                                    <input type="text" class="form-control @error('giro') is-invalid @enderror" id="giro" name="giro">
                                    @error('giro')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</section>
@endsection

@push('scripts')
    <script>
        'use strict';

        var handleChange = (e) => {
            let wrapper = document.getElementById('wrapper');
            
            if (e.checked) {
                if (wrapper.classList.contains('d-none')) {
                    wrapper.classList.remove('d-none');
                }
            } else {
                wrapper.classList.add('d-none');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('gridCheck');

            handleChange(checkbox);
        })

        var play = (function() {
            var executed = false;
            return function() {
                if (!executed) {
                    executed = true;
                    document.getElementById('player').load(@json(asset('animations/88722-mobile-payment-lottie-animation.json')));
                }
            }
        })();

        document.addEventListener('scroll', (e) => {
            if (window.scrollY > document.getElementById('agricolaWrapp').offsetHeight) {
                /* console.log('entre'); */
                play();
            } /* else {
                document.getElementById('player').removeAttribute('autoplay');
            } */
        });

        (function() {
            if ('{{  isset($state) ? $state : '' }}' != '') {
                var state = '{{ isset($state) ? $state : '' }}';
                if (state == 'Successfully') {
                    Swal.fire(
                        '!Tú Solicitud Esta Siendo Procesada!',
                        'Uno de nuestros agentes de venta, se pondra en contacto contigo.',
                        'success'
                    )
                } else {
                    Swal.fire(
                        '!Tú Solicitud Tuvo Un Problema!',
                        'Ocurrió un error en el formulario, porfavor intentalo de nuevo.',
                        'error'
                    )
                }
            }
        }())
        
    </script>
@endpush