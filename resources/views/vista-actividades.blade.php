<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/lugares-dinamicos.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body ng-app="app">

    <div class="container" ng-controller="ctrl">
    <h1>Vista Actividades</h1>
    <div class="titulo">@{{lugares3[0].nombre}}</div>
        <div id="contenedor-principal">
        <p>Fotografias</p>
        </div>
        <div id="contenedor-principal2">
        <p>Actividades</p>
        </div>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter, $compile){ 
            $scope.lugares = {!! json_encode($dataLugares->toArray()) !!}
            $scope.lugares2 = {!! json_encode($dataLugares2->toArray()) !!}
            $scope.lugares3 = {!! json_encode($dataLugares3->toArray()) !!}
            console.log($scope.lugares);
            console.log($scope.lugares2);
            console.log($scope.lugares3);
            var myEl = angular.element( document.querySelector( '#contenedor-principal' ) );
            var myEl2 = angular.element( document.querySelector( '#contenedor-principal2' ) );  
            for(var x=0; x<$scope.lugares.length;x++){
                myEl.append(
                '<div class="titulo">'+$scope.lugares[x].nombre+'</div>'    
                +'<img  src=" http://127.0.0.1:8000/storage/'+$scope.lugares[x].imagen+'" width="400px" height="300px>'
                +'<div class="nada"></div>'
                // +'<div class="ubicacion">Estado:'+texto+'</div>' 
                ); 
            }

            for(var x=0; x<$scope.lugares2.length;x++){
                myEl2.append(
                '<div class="titulo">'+$scope.lugares2[x].nombre+'</div>'
                +'<img  src=" http://127.0.0.1:8000/storage/'+$scope.lugares2[x].imagen+'" width="400px" height="300px>'
                +'<div class="descripcion">'+$scope.lugares2[x].descripcion+'</div>'
                // +'<div class="ubicacion">Estado:'+texto+'</div>'
                ); 
            }
        });
        
</script>