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
			<!-- Button trigger modal -->
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Launch demo modal
		</button> -->
			<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoria</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form name="form_categoria">
					<div class="container">
						<div>
							<label>Nombre</label>
							<input class="form-control" name="nombreCategoria" type="text" ng-model="categoria.nombre" placeholder="Nombre de la categoria"  ng-required="true">
							<span ng-show="form_categoria.nombreCategoria.$dirty && form_categoria.nombreCategoria.$error.required" style="color:red">Campo Requerido</span>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" ng-click="saveCategoria()" ng-disabled="!form_categoria.$valid">Save changes</button>
			</div>
			</div>
		</div>
		</div>

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
				<label>Ubicación</label>
				<input type="text" name="ubicacion" class="form-control"  placeholder="Ingresa una direccion o seleccionala del mapa" ng-model="lugar.ubicacion"  ng-required="true">
                <span ng-show="form_lugar.ubicacion.$dirty && form_lugar.ubicacion.$error.required" style="color:red">Campo Requerido</span>
			</div>
			<div>
				<label>Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Ingresa una direccion o seleccionala del mapa" ng-model="telefonos.telefonos"  ng-required="true">
                <span ng-show="form_lugar.telefono.$dirty && form_lugar.telefono.$error.required" style="color:red">Campo Requerido</span>
			</div>
			<div>
				<label>Categoria</label>
				<div class="form-group row">
					<div class="col-sm-10">
					<select  name="categoria" ng-options="categoria.nombre for categoria in all_data "  class="form-control" id="day_date" ng-model="lugar.categoria" ng-required="true">
					<option value="">Selecciona una categoria</option>
					</select>
					<span ng-show="form_lugar.categoria.$dirty && form_lugar.categoria.$error.required" style="color:red">Campo Requerido</span>
					</div>
					<button type="button" class="btn btn-primary col-sm-2 col-form-label" id="btnPer" data-toggle="modal" data-target="#exampleModal">Agregar categoria</button>
				</div>
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
            //$scope.categorias=[{id:1, name:'Área de deporte'},{id:2, name:'Cultural'},{id:3, name:'Turismo'},{id:4, name:'Comida'},{id:5, name:'Entretenimineto'}];
            $scope.lugar={};
			$scope.categoria={};
			$scope.telefonos={};
			$scope.all_data = {!! json_encode($data->toArray()) !!}
			console.log($scope.categorias);
			console.log($scope.all_data);
                $scope.save = function(){
                    console.log($scope.lugar);
					$scope.form_lugar.$setPristine();
					//LLAMADA A LA FUNCION PARA GUARDAR EN LA TABLA DE LUGARES
					$http.post('/save',$scope.lugar).then(
						function(response){
							alert("Agregado con exito");
							console.log(response.data);
							$scope.telefonos.id_negocio = Number(response.data);
							$http.post('/saveTelefonoLugar',$scope.telefonos).then(
								function(response){
									alert("Agregado con exito");
								},function(errorResponse){
									alert("Fallo la conexion telefonos");
								}
							);
						},function(errorResponse){
							alert("Fallo la conexion luga");
							//console.log(response);
						}
					);
					//LLAMADA A LA FUNCION PARA GUARDAR EN LA TABLA TELEFONOS
					console.log($scope.telefonos);
					// setTimeout(() => {
					// $http.post('/saveTelefonoLugar',$scope.telefonos).then(
					// 	function(response){
					// 		alert("Agregado con exito");
					// 	},function(errorResponse){
					// 		alert("Fallo la conexion telefonos");
					// 	}
					// );
					// }, 1000);
					
                }

                $scope.clean = function(){
                    $scope.lugar= {};
                    $scope.form_lugar.$setPristine();
                }

				$scope.onFileSelected = function(event) {
					console.log(this.$scope.imagen);
				}

				$scope.saveCategoria = function() {
					$scope.form_categoria.$setPristine();
					$http.post('/saveCategoria',$scope.categoria).then(
						function(response){
							alert("Agregado con exito");
						},function(errorResponse){
							alert("Fallo la conexion categoria");
							
						}
					);
					location.reload();
				}

        });
</script>