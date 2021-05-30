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
<h1 class="panel-title">ACTUALIZAR CALZADO</h1>
</div>
<div class="panel-body">
<div class="table-container">
 

 
<form method="POST" action="{{ route('calzado.update', $calzado->id) }}" role="form">

{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">

<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="tipo" id="tipo" class="form-control input-sm" value="{{$calzado->tipo}}">
</div>
 
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="color" id="color" class="form-control input-sm" value="{{$calzado->color}}">
</div>
</div>
</div>


<div class="form-group">
<textarea name="calzado" class="form-control input-sm" placeholder="Calzado">{{$calzado->calzado}}</textarea>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
 

<div class="form-group">
<input type="text"
 
name="talla" id="talla" class="form-control input-sm" value="{{$calzado->talla}}">
</div>
 
</div>
<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">
<input type="text"
 
name="marca" id="marca" class="form-control input-sm" value="{{$calzado->marca}}">
</div>
</div>
 
</div>
<div class="form-group">
<textarea name="genero" class="form- control input-sm" placeholder="Calzado">{{$calzado->calzado}}</textarea>
</div>
<div class="row">


<div class="form-group">
<input type="text"
 
name="edades" id="edades" class="form-control input-sm" value="{{$calzado->edades}}">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<br><br>
<button><input type="submit" value="Actualizar" class="btn btn-success btn-block"></button>

<button><a href="{{ route('calzado.index') }}" class="btn btn-info btn-block" >Atrás</a></button>
</div>

</div>
</div>
 
</div>
</form>

</div>
</section> @endsection
</center>