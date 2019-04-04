<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/lugares-dinamicos.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body ng-app="app">
    <div class="container" ng-controller="ctrl">
    <h1>Vista Personal</h1>
        <div id="contenedor-principal">
        </div>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter, $compile){ 
            $scope.lugares = {!! json_encode($dataLugares->toArray()) !!}
            $scope.titulo="hola";
            console.log($scope.lugares);
            $scope.lugarNombre= $scope.lugares[0].nombre
            var myEl = angular.element( document.querySelector( '#contenedor-principal' ) );
            for(var x=0; x<$scope.lugares.length;x++){
                myEl.append(
                    '<div class="titulo">'+$scope.lugares[x].nombre+'</div>'
                +'<img  src=" http://127.0.0.1:8000/storage/'+$scope.lugares[x].imagen+'" width="400px" height="300px>'
                +'<div class="telefono"></div>'
                +'<div class="telefono">Telefono: '+$scope.lugares[x].telefono+'</div>'
                +'<div class="descripcion">Descripcion:'+$scope.lugares[x].descripcion+'</div>'
                +'<div class="ubicacion">'+$scope.lugares[x].ubicacion+'</div>'
                ); 
                myEl.append($compile(
                    "<form action='/fotografias/"+$scope.lugares[x].id+"' method='get'>"
                    +"<input  id='button"+x+"' type='submit' value='Agregar Fotografias' class = 'btn btn-primary' ng-click='seeMore(1)'></input>"
                    +"</form>"
                    +"<form action='/actividades/"+$scope.lugares[x].id+"' method='get'>"
                    +"<input  id='button"+x+"' type='submit' value='Agregar Actividades' class = 'btn btn-primary' ng-click='seeMore(1)'></input>"
                    +"</form>"
                    )($scope));
            }



            
        });
        
</script>