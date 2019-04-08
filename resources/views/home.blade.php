@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <h5>¿Qué desea hacer {{ Auth::user()->name }}?</h5>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row" style="margin-top: 50px;">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center bg-dark text-white overflow-hidden">
                <div class="my-3 py-3">
                <h2 class="display-5">Nuevo Lugar</h2>
                <a href="/lugares/{{ Auth::user()->id }}"><p class="lead hvr-icon-wobble-horizontal">Agrega lugares <i class="fa fa-arrow-right hvr-icon"></i></p></a>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="background-image:url({{asset('img/dashboard/dashboard-1.jpg')}}); background-position: center; background-size: cover; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center bg-light overflow-hidden">
                <div class="my-3 p-3">
                <h2 class="display-5">Mis Lugares</h2>
                <a href="/personal/{{ Auth::user()->id }}"><p class="lead hvr-icon-wobble-horizontal">Ve tus lugares <i class="fa fa-arrow-right hvr-icon"></i></p></a>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="background-image:url({{asset('img/dashboard/dashboard-2.jpg')}}); background-position: center; background-size: cover; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center bg-light overflow-hidden" ng-if="permisos">
                <div class="my-3 p-3">
                <h2 class="display-5">Vista administrador</h2>
                <a href="/lugares-admin"><p class="lead hvr-icon-wobble-horizontal">admin <i class="fa fa-arrow-right hvr-icon"></i></p></a>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="background-image:url({{asset('img/dashboard/dashboard-2.jpg')}}); background-position: center; background-size: cover; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div>
            <input type="text" id="permiso" value="{{ Auth::user()->permiso }}" style="visibility: hidden">
            </div>
        </div>
    </div>
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
