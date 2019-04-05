@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden " style="width: 50%;">
                <div class="my-3 py-3">
                <h2 class="display-5">Nuevo Lugar</h2>
                <a href=""><p class="lead hvr-icon-wobble-horizontal">Agrega lugares <i class="fa fa-arrow-right hvr-icon"></i></p></a>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="background-image:url({{asset('img/dashboard/dashboard-1.jpg')}}); background-position: center; background-size: cover; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="width: 50%;">
                <div class="my-3 p-3">
                <h2 class="display-5">Mis Lugares</h2>
                <a href=""><p class="lead hvr-icon-wobble-horizontal">Ve tus lugares <i class="fa fa-arrow-right hvr-icon"></i></p></a>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="background-image:url({{asset('img/dashboard/dashboard-2.jpg')}}); background-position: center; background-size: cover; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
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
