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
		<form name="form_lugar">
			<div>
				<label>Nombre</label>
				<input class="form-control" name="nombre" type="text" ng-model="lugar.nombre" placeholder="Nombre del lugar"  ng-required="true">
				<span ng-show="form_lugar.nombre.$dirty && form_lugar.nombre.$error.required" style="color:red">Campo Requerido</span>
			</div>
			<div>
				<label>Descripción</label>
				<textarea class="form-control" rows="5" name="descripcion" type="text" placeholder="Descripción"  ng-model="lugar.descripcion" ng-required="true"></textarea>
				<span ng-show="form_lugar.descripcion.$dirty && form_lugar.descripcion.$error.required" style="color:red">Campo Requerido</span>
			</div>
			<div>	
				<label>Imagen</label>
				<input class="form-control" name="imagen" type="text" ng-model="lugar.imagen" placeholder="Imagen"  ng-required="true">
				<span ng-show="form_lugar.imagen.$dirty && form_lugar.imagen.$error.required" style="color:red">Campo Requerido</span>
				<!-- <input id="upload" class="form-control" name="imagen" type="file" ng-model="imagen" ng-change="onFileSelected($event)"> -->
			</div>
			<div>
				<label>Nombre del negocio</label>
					<div>
					<select  name="categoria" ng-options="categoria.nombre for categoria in all_data "  class="form-control" id="day_date" ng-model="lugar.categoria" ng-required="true">
					<option value="">Selecciona una lugar</option>
					</select>
					<span ng-show="form_lugar.categoria.$dirty && form_lugar.categoria.$error.required" style="color:red">Campo Requerido</span>
					</div>
			<button class="btn btn-primary" type="button" ng-click="save()" ng-disabled="!form_lugar.$valid">GUARDAR</button>
			<button class="btn btn-primary" type="button" ng-click="clean()">LIMPIAR</button>
		</form>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter){ 
            $scope.all_data = {!! json_encode($data->toArray()) !!}
            console.log($scope.all_data);
        });
</script>