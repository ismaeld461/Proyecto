<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
         <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
           <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
        <title>Digidata</title>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Digidata</font></font></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Navegación de palanca">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="/folder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gestion
                        </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Actual)</font></font></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Consulta</font></font></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edicion</font></font></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de</font></font></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desplegable</font></font></a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acción</font></font></a>
                        <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Otra accion</font></font></a>
                        <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Algo mas aqui</font></font></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enlace separado</font></font></a>
                      </div>
                    </li>
                  </ul>
                    <button class="btn btn-secondary" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><font><font>Iniciar sesion</font></font></button>
                  </form>
                   <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Iniciar Sesion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                         <div class="modal-body">
                            <div class="row justify-content-center">
                                 <div class="col-md-8">
                                     <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                                        <div class="col-md">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mt-2">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                        <div class="col-md">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                     <div class="form-group row mt-2 ml-3">
                                                 <button type="submit" class="btn btn-primary col-md-4">
                                          {{ __('Login') }}    </button>
        
                                                         <button type="button" class="btn btn-primary col-md-6 ml-4 dropdown-toggle" data-toggle="dropdown">Tipo de usuario</button>
                                                          <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Administrador</a>
                                                               <a class="dropdown-item" href="#">Funcionario</a>
                                                               <a class="dropdown-item" href="#">Otro rol</a>
                                                            </div>
                                              
                                        </div>
                                   @if (Route::has('password.request'))
                                             <a class="btn btn-success mt-2" href="{{ route('password.request') }}">
                                                 {{ __('Forgot Your Password?') }}
                                          </a>
                                    @endif
                                        </form>
                                    </div>
                                </div>
                             </div>
                        </div>
                                  <div class="modal-footer">
                                    Digidata
                                  </div>
                                </div>
                          </div>
                   </div>

                            
                </div>
            </div>
        </div>
                </div>
              </div>
            </nav>
        
    </body>
    
</html>
