@extends('layouts.layout') @section('content')
<style>

button{
    border-radius: 5px;
    background-color:cornflowerblue;
    width:80px;
    height:40px;
}
</style>
<center>
<div class="row" style="background-color:#3CF651">
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
<h1 class="panel-title">NUEVO CALZADO</h1>
</div>
<div class="panel-body">
<div class="table-container">
<form method="POST" action="{{ route('calzado.store') }}" role="form">
 
{{ csrf_field() }}
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="calzado" id="calzado" class="form-control input-sm" placeholder="Nombre de Calzado">
</div>
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="tipo" id="tipo" class="form-control input-sm" placeholder="Tipo de Calzado">
</div>
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text"
 
name="color" id="color" class="form-control input-sm" placeholder="Color del Calzado">
</div>
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
 
<div class="form-group">
<input type="text" name="talla" id="talla" class="form-control input-sm" placeholder="Talla del Calzado">

</div>

</div>
</div>

<div class="form-group">
<input type="text"
 
name="marca" id="marca" class="form-control input-sm" placeholder="Marca del Calzado">
</div>
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="genero" id="genero" class="form-control input-sm" placeholder="Genero del Calzado">
</div>
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="edades" id="edades" class="form-control input-sm" placeholder="Edades del Calzado">
</div>
 
</div>

<br><br>

<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

<button><input type="submit" value="Guardar" class="btn btn-success btn-block"></button>

<button><a href="{{ route('calzado.index') }}" class="btn btn-info btn-block" >Atrás</a></button>
</div>
 
</div>

</div>
</div>
</form>
</div>
</section>
</center>
@endsection