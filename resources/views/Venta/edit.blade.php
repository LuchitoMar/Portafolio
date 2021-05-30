@extends('layouts.layout') @section('content')
<style>
button{
    border-radius: 5px;
    background-color:cornflowerblue;
    width:90px;
    height:40px;
}
</style>
<center>
<div class="row" style="background-color:orange">
<section class="content">
<div class="col-md-8 col-md-oﬀset-2"> @if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Error!</strong> Revise los campos obligatorios.<br><br>
<ul>
</div> @endif
</ul>
 
@foreach ($errors->all() as $error)
<li>{{ $error }}</li> @endforeach
 
@if(Session::has('success'))
<div class="alert alert-info">
{{Session::get('success')}}
</div> @endif

<div class="panel panel-default">
<div class="panel-heading">
<h1 class="panel-title">ACTUALIZAR VENTA</h1>
</div>
<div class="panel-body">
<div class="table-container">

<br><br>

 
<form method="POST" action="{{ route('venta.update', $venta->id) }}" role="form">

{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">

<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="fecha_compra" id="fecha_compra" class="form-control input-sm" value="{{$venta->fecha_compra}}">
</div>
 
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="tipo_pago" id="tipo_pago" class="form-control input-sm" value="{{$venta->tipo_pago}}">
</div>
</div>
</div>

<div class="form-group">
<input type="text"
 
name="monto_pago" id="monto_pago" class="form-control input-sm" value="{{$venta->monto_pago}}">
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<br><br>
<button><input type="submit" value="Actualizar" class="btn btn-success btn-block"></button>

<button><a href="{{ route('venta.index') }}" class="btn btn-info btn-block" >Atrás</a></button>
</div>

</div>
</div>
 
</div>
</form>

</div>
</section> @endsection
</center>