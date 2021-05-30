@extends('layouts.layout') @section('content')

<style>
th,td{
    border: solid green 2px;
    background-image: url(css/img/imagen.jpg);
    width:100%;
    font-family: Comic Sans MS;
}
table{
    border: solid green 1px;
    background-color: white;
    width:20%;
    border-radius: 5px;
}
button{
    border-radius: 5px;
    background-color:cornflowerblue;
    width:130px;
    height:50px;
}
</style>
<center>
<div class="row"  style="background-color:#3CF651">
<section class="content">
<div class="col-md-8 col-md-oﬀset-2">
<div class="panel panel-default">
<div class="panel-body">
<div class="pull-left"><h1>LISTA DE CALZADOS</h1></div>
<div class="pull-right">
</div>
<div class="table-container">
 
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>Calzado</th>
<th>Tipo</th>
<th>Color</th>
<th>Talla</th>
<th>Marca</th>
<th>Genero</th>
<th>Edades</th>
<th>Editar</th>
<th>Eliminar</th>
</thead>
<tbody>
@if($calzados->count()) @foreach($calzados as $calzado)
<tr>
<td><b><center>{{$calzado->calzado}}</center></b></td>
<td><b><center>{{$calzado->tipo}}</center></b></td>
<td><b><center>{{$calzado->color}}</center></b></td>
<td><b><center>{{$calzado->talla}}</center></b></td>
<td><b><center>{{$calzado->marca}}</center></b></td>
<td><b><center>{{$calzado->genero}}</center></b></td>
<td><b><center>{{$calzado->edades}}</center></b></td>
<td><button><a class="btn btn-primary btn-xs" href="{{action('CalzadoController@edit', $calzado->id)}}" >Editar<span class="glyphicon glyphicon-pencil"></span></a></button></td>
<td>
<form action="{{action('CalzadoController@destroy', $calzado->id)}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<br>
<button class="btn btn-danger btn-xs" type="submit">Eliminar<span class="glyphicon glyphicon-trash"></span></button>
</td>
</tr> @endforeach @else
<tr>
<td colspan="8">No hay registro !!</td>
</tr> @endif
</tbody>

</table><br><br><br><br>
<div class="btn-group">
<button><a href="{{ route('calzado.create') }}" class="btn btn-info" >Añadir Calzado</a></button>
<button><a href="{{ route('venta.index') }}" class="btn btn-info" >Ir a Ventas</a></button>
</div> 
</div>
</div>
{{ $calzados->links() }}
</div>
</div>
</section> @endsection
</center>