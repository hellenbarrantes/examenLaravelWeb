<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($cliente))

<div class="form-group">
        <label for="exampleInputEmail1">Cedula</label>
        <input type="text" name="cedula" class="form-control" placeholder="Cedula" value="{{ $cliente->cedula }}">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Nombres" value="{{ $cliente->nombre }}">
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Apellido</label>
        <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="{{ $cliente->apellido }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Nacimiento</label>
        <input type="text" name="nacimiento" class="form-control" placeholder="Nacimiento" value="{{ $cliente->nacimiento }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Direccion</label>
        <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{ $cliente->direccion }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Est Civil</label>
        <input type="text" name="estadoCivil" class="form-control" placeholder="EstadoCivil" value="{{ $cliente->estadoCivil }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Genero</label>
        <input type="text" name="genero" class="form-control" placeholder="Genero" value="{{ $cliente->genero }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="text" name="fechaIngreso" class="form-control" placeholder="FechaIngreso" value="{{ $cliente->fechaIngreso }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Tipo</label>
        <input type="text" name="tipo" class="form-control" placeholder="Tipo" value="{{ $cliente->tipo }}">
    </div>

<div class="form-group">
        <label for="exampleInputEmail1">Descuento</label>
        <input type="text" name="descuento" class="form-control" placeholder="Descuento" value="{{ $cliente->descuento }}">
    </div>

@else
<div class="form-group">
        <label for="exampleInputEmail1">Cedula</label>
        <input type="text" name="cedula" class="form-control" placeholder="Cedula">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Nombres">
    </div>


  <div class="form-group">
        <label for="exampleInputEmail1">Apellido</label>
        <input type="text" name="apellido" class="form-control" placeholder="Apellido">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Nacimiento</label>
        <input type="text" name="nacimiento" class="form-control" placeholder="Nacimiento">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Direccion</label>
        <input type="text" name="direccion" class="form-control" placeholder="Direccion">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Est Civil</label>
        <input type="text" name="estadoCivil" class="form-control" placeholder="EstadoCivil">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Genero</label>
        <input type="text" name="genero" class="form-control" placeholder="Genero">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="text" name="fechaIngreso" class="form-control" placeholder="FechaIngreso">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Tipo</label>
        <input type="text" name="tipo" class="form-control" placeholder="Tipo">
    </div>

<div class="form-group">
        <label for="exampleInputEmail1">Descuento</label>
        <input type="text" name="descuento" class="form-control" placeholder="Descuento">
    </div>

@endif 