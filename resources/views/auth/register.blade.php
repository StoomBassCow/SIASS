@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('Nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('Apellidos'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('Correo Electronico'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Correo Electronico') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('Contraseña'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Contraseña') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_role" class="col-md-4 col-form-label text-md-right">Rol</label>

                            <div class="col-md-6">
                                <!<input id="idRole" type="text" class="form-control{{ $errors->has('idRole') ? ' is-invalid' : '' }}" name="idRole" value="{{ old('idRole') }}" required autofocus>
                                <select  id="id_role" name="id_role"  class="form-control{{ $errors->has('id_role') ? ' is-invalid' : '' }}"  value="{{ old('id_role') }}" required autofocus>
                                        <option value=1 >Administrador General</option> 
                                        <option value=2 selected>Coordinacion por Facultad</option>
                                       
                                </select>
                                @if ($errors->has('id_role'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id_role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-8 text-right">
                            <div class= "btn-group btn-group-m">
                                <button type="submit" class="btn btn-dark btn-m">

                        
                                    {{ __('Registro') }}
                                </button>
                            
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
