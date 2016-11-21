<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($producto))

    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Nombres" value="{{ $producto->nombre }}">
    </div>

<div class="form-group">
        <label for="exampleInputEmail1">Marca</label>
        <input type="text" name="marca" class="form-control" placeholder="marca" value="{{ $producto->marca }}">
    </div>

<div class="form-group">
        <label for="exampleInputEmail1">Familia</label>
        <input type="text" name="familia" class="form-control" placeholder="familia" value="{{ $producto->familia}}">
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Casa de Fabricacion</label>
        <input type="text" name="casaFabricacion" class="form-control" placeholder="casaFabricacion" value="{{ $producto->casaFabricacion }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Tipo Unidad</label>
        <input type="text" name="tipoUnidad" class="form-control" placeholder="tipoUnidad" value="{{ $producto->tipoUnidad }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Departamento</label>
        <input type="text" name="departamento" class="form-control" placeholder="departamento" value="{{ $producto->departamento }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Activo</label>
        <input type="text" name="activo" class="form-control" placeholder="activo" value="{{ $producto->activo }}">
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="text" name="fechaIngreso" class="form-control" placeholder="FechaIngreso" value="{{ $producto->fechaIngreso }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Unidad</label>
        <input type="text" name="unidad" class="form-control" placeholder="unidad" value="{{ $producto->unidad }}">
    </div>

 

  <div class="form-group">
        <label for="exampleInputEmail1">Impuesto</label>
        <input type="text" name="impuesto" class="form-control" placeholder="Impuesto" value="{{ $producto->impuesto }}">
    </div>



@else

   <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Nombres" >
    </div>

<div class="form-group">
        <label for="exampleInputEmail1">Marca</label>
        <input type="text" name="marca" class="form-control" placeholder="marca" >
    </div>

<div class="form-group">
        <label for="exampleInputEmail1">Familia</label>
        <input type="text" name="familia" class="form-control" placeholder="familia" >
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Casa de Fabricacion</label>
        <input type="text" name="casaFabricacion" class="form-control" placeholder="casaFabricacion" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Tipo Unidad</label>
        <input type="text" name="tipoUnidad" class="form-control" placeholder="tipoUnidad" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Departamento</label>
        <input type="text" name="departamento" class="form-control" placeholder="departamento" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Activo</label>
        <input type="text" name="activo" class="form-control" placeholder="activo" >
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="text" name="fechaIngreso" class="form-control" placeholder="FechaIngreso" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Unidad</label>
        <input type="text" name="unidad" class="form-control" placeholder="unidad" >
    </div>

 

  <div class="form-group">
        <label for="exampleInputEmail1">Impuesto</label>
        <input type="text" name="impuesto" class="form-control" placeholder="Impuesto" >
    </div>
@endif 