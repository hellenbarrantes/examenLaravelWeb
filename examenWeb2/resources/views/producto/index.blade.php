<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <h1>Lista de productos</h1>
    <h4><a href="{{ route('productos.create') }}">Registrar nuevo producto</a></h4>
     <h4><a href="{{ url('/home') }}">Regresar inicio</a></h4>
    <hr>

    <div class="table-responsive">
        @if($data)
            <table class="table">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Familia</td>
                        <td>Casa de Fabricacion</td>
                        <td>tipo unidad</td>
                        <td>Departamento</td>
                        <td>Activo</td>
                        <td>Fecha</td>
                        <td>Unidad</td>
                        <td>Impuesto</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->marca}}</td>
                        
                        <td>{{ $row->familia }}</td>
                        <td>{{ $row->casaFabricacion }}</td>
                        <td>{{ $row->tipoUnidad }}</td>
                        <td>{{ $row->departamento }}</td>
                        <td>{{ $row->activo }}</td>
                        <td>{{ $row->fechaIngreso }}</td>
                        <td>{{ $row->unidad }}</td>
                        <td>{{ $row->impuesto }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $row->id) }}" class="btn btn-info">Editar</a>

                            <form action="{{ route('productos.destroy', $row->id) }}" method="post">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        @endif
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>