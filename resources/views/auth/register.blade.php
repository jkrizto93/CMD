@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="header header-primary text-center">
                            <h4>Registro</h4>
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">

                            <div class="checkbox">
                                <label>

                                     <input id="enterprice" type="checkbox">
                                     Empresa
                                   
                                 </label>  
                                 <label>

                                     <input id="user" type="checkbox">
                                     Usuario
                                   
                                 </label>                         
                            </div>
                        
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre"
                                       value="{{ old('nombre') }}" required autofocus>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">create</i>
                                </span>
                                <input type="text" class="form-control" placeholder="Apellido paterno" name="ap_paterno"
                                       value="{{ old('ap_paterno') }}" required autofocus>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">create</i>
                                </span>
                                <input type="text" class="form-control" placeholder="Apellido materno" name="ap_materno"
                                       value="{{ old('ap_materno') }}" required autofocus>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" placeholder="Correo electrónico" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">phone_iphone</i>
                                </span>
                                <input id="celular" type="phone" placeholder="celular" class="form-control" name="celular" value="{{ old('celular') }}" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">phone</i>
                                </span>
                                <input id="telefono" type="phone" placeholder="Teléfono" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">call_split</i>
                                </span>
                                <input id="extension" type="phone" placeholder="Extension" class="form-control" name="extension" value="{{ old('extension') }}">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">class</i>
                                </span>
                                <input id="direccion" type="text" placeholder="Dirección" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required />
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar registro</a>
                        </div>
                        <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password? -->
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
</div>


@endsection


