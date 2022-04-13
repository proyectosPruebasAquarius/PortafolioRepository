<div>
    <form class="row form-contact" wire:submit.prevent="saveContact" >
        
        @csrf
        <div class="mb-3">
          
          <input class="form-control form-quriar-control @error('nombre') is-invalid @enderror" id="inputName" type="text" min="10" maxlength="50" name="nombre" placeholder="Nombre" wire:model.lazy="nombre" />
          @error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">          
          <input class="form-control form-quriar-control @error('correo') is-invalid @enderror" id="inputEmail" type="email" name="correo" placeholder="Correo Electrónico" wire:model.lazy="correo"/>
          @error('correo') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">          
          <input class="form-control form-quriar-control @error('telefono') is-invalid @enderror" id="inputPhone" maxlength="12"  name="telefono" placeholder="Teléfono" wire:model.lazy="telefono" />
          @error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        {{-- <div class="mb-5 text-center">
          <label class="form-label">Interes</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="interes" value="Creacion de Proyecto">
            <label class="form-check-label" for="inlineCheckbox1">Creacion de Proyecto</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="interes" value="Adquisición de Proyecto">
            <label class="form-check-label" for="inlineCheckbox2">Adquisición de Proyecto</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="interes" value="Participacion En Proyecto" >
            <label class="form-check-label" for="inlineCheckbox3">Participacion En Proyecto</label>
          </div>
        </div> --}}
        <div class="mb-3">
          
          
            {{--<select class="form-select" id="floatingSelect" name="tipo_persona">
              <option selected disabled>Seleciona</option>
              <option value="Persona Natural">Persona Natural</option>
              <option value="persona Juridica">persona Juridica</option>
             
            </select>
            <label class="form-label text-black" for="floatingSelect">Tipo de pesona</label>--}}            
            <input class="form-control form-quriar-control @error('empresa') is-invalid @enderror" id="inputEmpresa" maxlength="120"  name="empresa" placeholder="Nombre de la Empresa" wire:model.lazy="empresa" />
            @error('empresa') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="mb-3">
          <label class="form-label visually-hidden" for="validationTextarea">Mensaje</label>
          <textarea class="form-control form-quriar-control @error('mensaje') is-invalid @enderror" id="validationTextarea" placeholder="Escriba su Mensaje" style="height: 150px" maxlength="1000" name="mensaje" wire:model.lazy="mensaje" {{-- required="required" --}}></textarea>
          @error('mensaje') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="d-grid">
          <button class="btn w-50 mx-auto rounded btn-danger text-white" type="submit" wire:loading.attr="disabled" wire:target="saveContact">
              Enviar
              <i class="fas fa-paper-plane "></i>
              <div class="spinner-border text-white spinner-border-sm" role="status" wire:loading wire:target="saveContact">
                <span class="sr-only">Loading...</span>
              </div>
            </button>
        </div>
        


      </form>
</div>
