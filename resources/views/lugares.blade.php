<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/lugar.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body ng-app="app">
    <div class="container" ng-controller="ctrl">
		<form action="{{ url('/save')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
			<label for="nombre">{{'Nombre'}}</label>
			<input type="text" name="nombre" id="nombre" value="" class="form-control">

			<label for="descripcion">{{'Descripcion'}}</label>
			<input type="text" name="descripcion" id="descripcion" value="" class="form-control">

			<label for="imagen">{{'Imagen'}}</label>
			<input type="file" name="imagen" id="imagen" value="" class="form-control">	

			<label for="ubicacion">{{'Ubicacion'}}</label>
			<input type="text" name="ubicacion" id="ubicacion" value="" class="form-control"> 

			<label for="telefono">{{'telefono'}}</label>
			<input type="text" name="telefono" id="telefono" value="" class="form-control">



			<div>
				<label>Categoria</label>
				<div class="form-group row">
					<div class="col-sm-10">
					<select  name="categoria"   class="form-control" id="categoria"  ng-required="true" class="form-control">
					<option value="">Selecciona una categoria</option>
					<option value=1>Area de deportes</option>
					<option value=2>Cultural</option>
					<option value=5>Entretenimiento</option>
					<option value=4>Restaurante</option>
					<option value=3>Turismo</option>
					<option value=6>Souvenirs</option>
					</select>
					</div>
				</div>
			</div>

			<input type="submit" value="agregar" ng-click="savePhone()">
			<input type="number" name="idUsuario" id="idUsuario" value="@{{lugares}}" class="form-control" style="visibility: hidden">	
		</form>

	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter){ 
			$scope.lugares = {!! json_encode($dataLugares) !!}
            console.log($scope.lugares);
        });
</script>