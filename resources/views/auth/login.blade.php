@extends('layouts.inicio')

@section('title')
    Registro a Programas de Posgrado
@endsection


@section('content_text')
<center>
    <b class="guinda" style="font-family: Italic; font-size:20px;">
        Carrera administrativa para el personal de apoyo y asistencia a la educación 21 etapa.
    </b>
    <br>
    <img class="img-fluid" src="img/cursocarreraa.png" width="70%">
</center>
@endsection

@section('content_text')

@endsection

@section('login')
<!--adminlte::auth.login-->
       



            <div class="container-fluid  " >

                <div class=" colorBG card-header " >
                    &nbsp;<b>ACCESO </b>&nbsp;  <i class="fa fa-desktop"></i>
                </div>

                <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group mb-2">
                                <input  type="text" name="email"
                                        style="color:#802434;"
                                        class=" form-control  input-sm @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}"
                                        placeholder="MATRÍCULA"
                                        autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text" >
                                        <span class="fa fa-user-circle {{ config('adminlte.classes_auth_icon', '') }}" style="color:#802434; font-weight: bold;"></span>&nbsp;
                                    </div>
                                </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group mb-2" id="show_hide_password">
                                        <input  type="password" name="password"
                                                style="color:#802434;"
                                                class="password1 form-control @error('password') is-invalid @enderror"
                                                placeholder="FOLIO">
                                        <div id="pwd" class="input-group-append">
                                            <div class=" input-group-text">
                                                <a href="" style="color:black;">
                                                    <i  class="fa fa-eye-slash {{ config('adminlte.classes_auth_icon', '') }}" 
                                                        aria-hidden="true" style="color:#802434; font-weight: bold;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div>
                                <button type=submit class="btn btn-outline-secondary btn-block btn-sm "
                                        style="text-decoration:none; ">
                                    Ingresar <i class="fa fa-sign-in"></i>
                                </button>
                            </div>
                        </form>
                </div>
            </div>



@endsection

      


