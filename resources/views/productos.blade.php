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
    <div class="container">
        <div>
            <label for="">Nombre del negocio</label>
            <input type="text" readonly class="form-control" value="Sendai Sushi">
        </div>
        <div>
            <label for="">Tipo de negocio</label>
            <input type="text" readonly class="form-control" value="Restaurante">
        </div>
        <div>
            <label for="">Ubicacion</label>
            <input type="text" readonly class="form-control" value="Colonia aleman #106">
        </div>
        <hr>
        <div>
            <h1>Producto</h1>
        </div>
        <div>
            <label for="">Nombre del producto</label>
            <input type="text"  class="form-control">
        </div>
        <div>
            <label for="">Precio del producto</label>
            <input type="number"  class="form-control">
        </div>
        <div>
            <label for="">Imagen del producto</label>
            <input type="text"  class="form-control">
        </div>
        <div>
            <label for="">Descripcion del producto</label>
            <textarea name="" id="" cols="4" rows="4" class="form-control"></textarea>
        </div>
        <div>
            <button class="btn btn-primary">Agregar</button>
        </div>
    </div>
    <div class="container">
		<table class="table">
			<thead class="thead-dark">
				<tr>
                    <th scope="row">IMAGEN</th>
					<th scope="row">NOMBRE</th>
					<th scope="row">PRECIO</th>
					<th scope="row">DESCRIPCION</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>#</td>
					<td>Gohan especial</td>
					<td>$80</td>
					<td>Rica cama de arroz bañada con un topping de anguila y aguacate</td>
				</tr>
                <tr>
					<td>#</td>
					<td>Yakimeshi especial</td>
					<td>$100</td>
					<td>Rica cama de arroz guisado acompañado de camarones, queso philadelphia y cangrejo</td>
				</tr>
			</tbody>
		</table>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter){ 


        });
</script>