@extends('layouts.app')

@section('content')
<div class="text-center">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        <h1 class="h3 mb-3 font-weight-normal">{{ __('Iniciar sesión') }}</h1>
        @csrf
        
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="{{ __('Correo electrónico') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Contraseña') }}" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        
        <div class="checkbox mb-3">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>

        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ __('Iniciar') }}
        </button>
        <p class="mt-5 mb-3 text-muted">BinKab &copy; 2019</p>
    </form>
</div>
@endsection
