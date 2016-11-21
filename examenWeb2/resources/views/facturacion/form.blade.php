<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($facturacion))

<div class="form-group">
        <label for="exampleInputEmail1">Id Cliente</label>
        <input type="text" name="idCliente" class="form-control" placeholder="idCliente" value="{{ $facturacion->idCliente }}">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="text" name="fecha" class="form-control" placeholder="fecha" value="{{ $facturacion->fecha }}">
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Monto Total</label>
        <input type="text" name="montoTotal" class="form-control" placeholder="montoTotal" value="{{ $facturacion->montoTotal }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Subtotal</label>
        <input type="text" name="subtotal" class="form-control" placeholder="subtotal" value="{{ $facturacion->subtotal }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Impuesto</label>
        <input type="text" name="impuesto" class="form-control" placeholder="impuesto" value="{{ $facturacion->impuesto }}">
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">ID Producto</label>
        <input type="text" name="idProducto" class="form-control" placeholder="idProducto" value="{{ $facturacion->idProducto }}">
    </div>

 
@else

<div class="form-group">
        <label for="exampleInputEmail1">Id Cliente</label>
        <input type="text" name="idCliente" class="form-control" placeholder="idCliente" >
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="text" name="fecha" class="form-control" placeholder="fecha" >
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Monto Total</label>
        <input type="text" name="montoTotal" class="form-control" placeholder="montoTotal" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Subtotal</label>
        <input type="text" name="subtotal" class="form-control" placeholder="subtotal" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Impuesto</label>
        <input type="text" name="impuesto" class="form-control" placeholder="impuesto" >
    </div>

  <div class="form-group">
        <label for="exampleInputEmail1">ID Producto</label>
        <input type="text" name="idProducto" class="form-control" placeholder="idProducto" >
    </div>

@endif 