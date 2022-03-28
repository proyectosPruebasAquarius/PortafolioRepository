@extends('app')

@section('content')
<section class="section mt-5">
    <div class="container mx-auto">      
      <div class="row">
        <div class="col-12 p-3">
          <h3 class="text-center text-danger">Inicio de Sesión</h3>
          <div class="card rounded w-100 w-md-50 mx-auto">
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                @csrf

                <div class="row">
                  <div class="col-12">
                    <lottie-player src="{{ asset('animations/27715-login-anim.json') }}" class="mx-auto" background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Correo Electrónico</label>
                  <div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="control-label">Contraseña</label>
                  <div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword3" placeholder="Contraseña" name="password" required autocomplete="current-password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input"> Recordarme
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 mt-2">
                    <button type="submit" class="btn btn-default border">Iniciar Sesión</button>
                  </div>
                </div>
              </form>
            </div>
          </div>          
        </div>        
      </div>
    </div>
</section>





@endsection
