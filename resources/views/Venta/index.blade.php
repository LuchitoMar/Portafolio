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
<div class="row" style="background-color:orange">
<section class="content">
<div class="col-md-8 col-md-oﬀset-2">
<div class="panel panel-default">
<div class="panel-body">
<div class="pull-left"><center><h1>REGISTRO DE VENTAS</h1></center></div>
<div class="pull-right">
</div>
<div class="table-container">
 
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>Fecha de Compra</th>
<th>Tipo de Pago</th>
<th>Monto de Pago</th>
<th>Editar</th>
<th>Eliminar</th>
</thead>
<tbody>
@if($ventas->count()) @foreach($ventas as $venta)
<tr>
<td><center><b>{{$venta->fecha_compra}}</center></b></td>
<td><center><b>{{$venta->tipo_pago}}</center></b></td>
<td><center><b>{{$venta->monto_pago}}</center></b></td>
<td><button><a class="btn btn-primary btn-xs" href="{{action('VentaController@edit', $venta->id)}}" >Editar<span class="glyphicon glyphicon-pencil"></span></a></button></td>
<td>
<form action="{{action('VentaController@destroy', $venta->id)}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<br>
<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">Eliminar</span></button>
</td>
</tr> @endforeach @else
<tr>
<td colspan="8">No hay registro !!</td>
</tr> @endif
</tbody>

</table>
<br><br><br><br>
<div class="btn-group">
<button><a href="{{ route('venta.create') }}" class="btn btn-info" >Realizar Venta</a></button>
<button><a href="{{ route('calzado.index') }}" class="btn btn-info" >Ir a Calzados</a></button>
</div> 
 
</div>
</div>
{{ $ventas->links() }}
</div>
</div>
</section> @endsection
</center>