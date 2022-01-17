@extends('layouts.app')

@section('cont_cabe')
    <title>Registro - dRemate</title>

@endsection

@section('contenidoJS')
    <link rel="stylesheet" href="css/styleRegister.css">

@endsection

@section('contenidoCSS')
@endsection

@section('contenido')

    <main class="main-contenido-central">
        <div class="main-background">
            <div class="container-fluid cuadro-registro">
                <div class="row">
                    <div class="col left-column">
                        <img class="register-image" src="https://http2.mlstatic.com/cuadro-en-tela-idea-arte-abstracto-moderno-decorativo-D_NQ_NP_777394-MLM28796695238_112018-F.jpg" alt="register-image">
                    </div>
                    <div class="col"><div class="card card-signin flex-row my-5">
                            <!-- <div class="card-img-left d-none d-md-flex">
                            </div> -->
                            <div class="card-body">
                                <h5 class="text-center titulo-1">Registro</h5>
                                <br>
                                <form class="form-signin" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-label-group">
                                        <input type="text" id="inputUserame"
                                            class="form-control @error('usuario') is-invalid @enderror"
                                            placeholder="Username" required name="usuario" value="{{ old('usuario') }}"
                                            required autocomplete="usuario" autofocus>
                                        <label for="inputUserame">Usuario</label>

                                        @error('usuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El usuario es requerido</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email address" name="email" value="{{ old('email') }}" required
                                            autocomplete="email">
                                        <label for="inputEmail">Correo</label>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="form-label-group">
                                        <input type="text" id="inputNombres"
                                            class="form-control @error('Nombres') is-invalid @enderror"
                                            placeholder="Nombres" required name="Nombres" value="{{ old('Nombres') }}"
                                            required autocomplete="Nombres" autofocus>
                                        <label for="inputNombres">Nombres</label>

                                        @error('Nombres')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El campo nombres es requerido</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-label-group">
                                        <input type="text" id="inputApellidos"
                                            class="form-control @error('Apellidos') is-invalid @enderror"
                                            placeholder="Apellidos" required name="Apellidos" value="{{ old('Apellidos') }}"
                                            required autocomplete="Apellidos" autofocus>
                                        <label for="inputApellidos">Apellidos</label>

                                        @error('Apellidos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El campo apellidos es requerido</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <!--<div class="form-label-group">
                                        <input type="text" id="inputTelef"
                                            class="form-control @error('Teléfono') is-invalid @enderror"
                                            placeholder="Teléfono" required name="Teléfono" value="{{ old('Teléfono') }}"
                                            required autocomplete="Teléfono" autofocus>
                                        <label for="inputTelef">Teléfono</label>

                                        @error('Apellidos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>El teléfono es requerido</strong>
                                        </span>
                                        @enderror

                                    </div>-->
                                    <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                                </div>
                                            <input class="form-control" type="number" name="telefono" placeholder="Número de teléfono"  required name="telefono " id="telefono" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label >Fecha de nacimiento</label>
                                           <div class="input-group">
                                                <div class="input-group-prepend">                                                    
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                                                </div>
                                                
                                                <input type="date" name="fechadenacimiento" required name="fechadenacimiento" id="fechadenacimiento" min="1000-01-01"
                                                  max="3000-12-31" class="form-control"  >                                                   
                                            </div>
                                        </div>

                                    <hr class="linea-negra" style="border-color: black;border-width:1px;border-radius:50%;">

                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" name="password" required autocomplete="new-password">
                                        <label for="inputPassword">Contraseña</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="inputConfirmPassword" class="form-control"
                                            placeholder="Password" name="password_confirmation" required
                                            autocomplete="new-password">
                                        <label for="inputConfirmPassword">Confirmar Contreseña</label>
                                    </div>
                                    {{-- <div class="form-inline mb-2">
                                        <input class="mr-2" type="checkbox" value="1" name="suscripcion">
                                        <label>Deseo suscribirme a D'REMATE</label>
                                    </div> --}}

                                    <button class="btn btn-lg btn-primary btn-block text-uppercase"
                                        type="submit">Registrarme</button>
                                    <a class="d-block text-center mt-2 small" href="{{ route('login') }}">Ya tengo una cuenta</a>
                                </form>
                            </div>
                        </div></div>
                    <div class="col-lg-10 col-xl-9" style="display: none;">
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('contenidoJSabajo')

    <!-- Colocar js abajo-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
