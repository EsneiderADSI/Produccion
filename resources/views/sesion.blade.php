@extends('layouts.master')
@section('contenido')

<p>
<p>

<div class="form-group">
  <label for="usr">Nombre de Usuario:</label>
  <input type="text" class="form-control" id="usr" placeholder="Nombre de Usuario">
</div>
<div class="form-group">
  <label for="pwd">Contraseña:</label>
  <input type="password" class="form-control" id="pwd" placeholder="Contraseña">
</div>

<div class="form-group">
  <label for="sel1">Rol:</label>
  <select class="form-control" id="sel1" >
    <option>Aprendiz</option>
    <option>Administrador</option>
    <option>Pructor</option>
    
  </select>
</div>
         
      
        

@endsection