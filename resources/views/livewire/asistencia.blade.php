<div>
    <!-- Modal -->
    <div class="modal fade" id="temporalModal" tabindex="-1" aria-labelledby="temporalModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content"
                style="background:  radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
            radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%); border-color: #EFB810;">
                <div class="modal-header border-0">
                    @if($asistir) <h5 class="modal-title" id="temporalModalLabel">Formulario de Confirmación, recibirás una llamada para confirmar tu visita</h5>@endif
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if($asistir)
                        <div class="container">
                            <form id="formTemporary" wire:submit.prevent="store">
                                <div>
                                    <label for="formGroupExampleInput" class="form-label text-black">Nombre *</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" wire:model.lazy="nombre">
                                    @error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>                            
                                <div class="mt-3">
                                    <label for="formGroupExampleInput2" class="form-label text-black">Correo Electrónico *</label>
                                    <input type="email" class="form-control" id="formGroupExampleInput2" wire:model.lazy="email">
                                    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div> 
                                <div class="mt-3">
                                    <label for="formGroupExampleInput4" class="form-label text-black">Representa una empresa</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput4" wire:model.lazy="empresa" aria-describedby="empresaHelp"> 
                                    <div id="empresaHelp" class="form-text text-black">Escriba el nombre de la empresa que representa.</div>                               
                                    @error('empresa') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-3">
                                    <label for="formGroupExampleInput3" class="form-label text-black">Teléfono *</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput3" wire:model.lazy="telefono" aria-describedby="telefonoHelp">
                                    <div id="telefonoHelp" class="form-text text-black">Recibirás una llamada para confirmar tu asistencia.</div>
                                    @error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div> 
                            </form>
                        </div>
                    @else
                        <div class="container" style="background-image: url({{ asset('images/serpentinas.png') }}); background-repeat: no-repeat; background-size: cover;">
                            <div class="navbar-brand  " style="font-weight:bold; ">
                                <img src="{{ asset('images/gallery/AQ-new.png')}}" alt="logo"
                                    style="height: 15vh" class="mx-auto d-block img-fluid" />
                                <span class="text-center"
                                    style="background-image: linear-gradient(to right, #f65a19 0%, #18c1bd 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: block;font-size: 5vh; -webkit-text-stroke: .5px black;">
                                    Aquarius IT SV
                                </span>
                            </div>
                            <br>
                            <h2 class="text-center text-break text-white">
                                Te Invita a Nuestra <span style="display:block">Gran Apertura</span>
                            </h2>
                        </div>
                        <img src="{{ asset('images/modal-bg2.png') }}" style="width: 100%; height: 25vh; padding: 0" alt="">
                        <br>
                        <div class="container">
                            <div style="margin-left: 25%">
                                <h5 class="text-white">Fecha: 6 de mayo de 2022</h5>
                                <h5 class="text-white">Hora: 3:30 p.m.</h5>
                                <h5 class="text-white">
                                    Lugar: 4ª. Calle Oriente
                                    <span style="display: block">
                                        Bo. San Antonio, Chalatenango
                                    </span>
                                </h5>
                                <p><a class="text-muted text-start" href='https://pngtree.com/so/Apertura' style="font-size: 12px">Apertura png de .pngtree.com/</a> | <a class="text-muted text-start mt-0" href='https://.pngtree.com/so/estilo' style="font-size: 12px">estilo png de .pngtree.com/</a></p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
                    @if($asistir)
                        <button type="submit" form="formTemporary" class="btn btn-secondary rounded-pill">Enviar</button>
                    @else
                        <button type="button" class="btn btn-secondary rounded-pill" wire:click="changeValue(true)">Asistir</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        'use strict';

        window.addEventListener('close-modal', event => {
            
            $('#temporalModal').modal('hide')
        });
    </script>        
    @endpush
</div>