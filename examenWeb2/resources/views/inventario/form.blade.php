<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($inventario))

<div class="form-group">
        <label for="exampleInputEmail1">Id Producto</label>
        <input type="text" name="idProducto" class="form-control" placeholder="idProducto" value="{{ $inventario->idProducto }}">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Cantidad</label>
        <input type="text" name="cantidad" class="form-control" placeholder="cantidad" value="{{ $inventario->cantidad}}">
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Cant Minima</label>
        <input type="text" name="cantidadMinima" class="form-control" placeholder="cantidadMinima" value="{{ $inventario->cantidadMinima }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Cant Maxima</label>
        <input type="text" name="cantidadMaxima" class="form-control" placeholder="cantidadMaxima" value="{{ $inventario->cantidadMaxima }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Gravado</label>
        <input type="text" name="gravado" class="form-control" placeholder="gravado" value="{{ $inventario->gravado }}">
    </div>


@else


<div class="form-group">
        <label for="exampleInputEmail1">Id Producto</label>
        <input type="text" name="idProducto" class="form-control" placeholder="idProducto">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Cantidad</label>
        <input type="text" name="cantidad" class="form-control" placeholder="cantidad" >
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Cant Minima</label>
        <input type="text" name="cantidadMinima" class="form-control" placeholder="cantidadMinima" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Cant Maxima</label>
        <input type="text" name="cantidadMaxima" class="form-control" placeholder="cantidadMaxima" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Gravado</label>
        <input type="text" name="gravado" class="form-control" placeholder="gravado" >
    </div>

@endif 