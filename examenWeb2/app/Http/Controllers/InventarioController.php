<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;

class InventarioController extends Controller
{
     private $path ='inventario';

    public function index(){

        $data = Inventario::all();
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
            $inventario = new Inventario();
            $inventario->idProducto     = $request->idProducto;
            $inventario->cantidad   = $request->cantidad;
            $inventario->cantidadMinima = $request->cantidadMinima;
            $inventario->cantidadMaxima  = $request->cantidadMaxima;
            $inventario->gravado  = $request->gravado;
            $inventario->save();

            return redirect()->route('inventarios.index');
        }
        catch(Exception $e){

            return "Fatal error - ".$e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $inventario = Inventario::findOrFail($id);
            $inventario->delete();
            return redirect()->route('inventarios.index');
        } catch (Exception $e){

            return "Fatal error - ".$e->getMessage();
        }

    }

    public function edit($id){
        $inventario = Inventario::findOrFail($id);
        return view($this->path.'.edit', compact('inventario'));
    }

    public function update(Request $request, $id){

        $inventario = Inventario::findOrFail($id);
        $inventario->idProducto     = $request->idProducto;
        $inventario->cantidad   = $request->cantidad;
        $inventario->cantidadMinima = $request->cantidadMinima;
        $inventario->cantidadMaxima  = $request->cantidadMaxima;
        $inventario->gravado  = $request->gravado;
        $inventario->save();
        return redirect()->route('inventarios.index');
    }
    
}
