<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    private $path ='producto';

    public function index(){

        $data = Producto::all();
        return view($this->path.'.index', compact('data'));
    }

    public function create(){
        
        return view($this->path.'.create');
    }

    public function store(Request $request){
        /*
         * Register user.
         * */
        try{
            $producto = new Producto();
            $producto->nombre    = $request->nombre;
            $producto->marca = $request->marca;
            $producto->familia  = $request->familia;
            $producto->casaFabricacion  = $request->casaFabricacion;
            $producto->tipoUnidad  = $request->tipoUnidad;
            $producto->departamento = $request->departamento;
            $producto->activo  = $request->activo;
            $producto->fechaIngreso  = $request->fechaIngreso;
            $producto->unidad  = $request->unidad;
            $producto->impuesto     = $request->impuesto;
            $producto->save();

            return redirect()->route('productos.index');
        }
        catch(Exception $e){

            return "Fatal error - ".$e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $producto = Producto::findOrFail($id);
            $producto->delete();
            return redirect()->route('productos.index');
        } catch (Exception $e){

            return "Fatal error - ".$e->getMessage();
        }

    }

    public function edit($id){
        $producto = Producto::findOrFail($id);
        return view($this->path.'.edit', compact('producto'));
    }

    public function update(Request $request, $id){

        $producto = Producto::findOrFail($id);
        $producto->nombre    = $request->nombre;
            $producto->marca = $request->marca;
            $producto->familia  = $request->familia;
            $producto->casaFabricacion  = $request->casaFabricacion;
            $producto->tipoUnidad  = $request->tipoUnidad;
            $producto->departamento = $request->departamento;
            $producto->activo  = $request->activo;
            $producto->fechaIngreso  = $request->fechaIngreso;
            $producto->unidad  = $request->unidad;
            $producto->impuesto     = $request->impuesto;
        $producto->save();
        return redirect()->route('productos.index');
    }
}
