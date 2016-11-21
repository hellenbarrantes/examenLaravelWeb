@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu inicio 
                
                
                </div>

                <div class="panel-body">
                   <a href="{{ route('clientes.index') }}">Clientes</a>
                </div>
                <div class="panel-body">
                   <a href="{{ route('productos.index') }}"> Productos</a>
                </div>
                
                <div class="panel-body">
                   <a href="{{ route('inventarios.index') }}">Inventarios</a>
                </div>
                
                <div class="panel-body">
                   <a href="{{ route('facturacion.index') }}">Facturación</a>
                </div>
                
                <div class="panel-body">
                   <a href="{{ route('users.index') }}">Usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
