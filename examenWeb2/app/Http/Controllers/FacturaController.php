<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facturacion;

class FacturaController extends Controller
{
      private $path ='facturacion';

    public function index(){

        $data = Facturacion::all();
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
            $facturacion = new Facturacion();
            $facturacion->idCliente     = $request->idCliente;
            $facturacion->fecha   = $request->fecha;
            $facturacion->montoTotal = $request->montoTotal;
            $facturacion->subtotal  = $request->subtotal;
            $facturacion->impuesto  = $request->impuesto;
            $facturacion->idProducto  = $request->idProducto;
            $facturacion->save();

            return redirect()->route('facturacion.index');
        }
        catch(Exception $e){

            return "Fatal error - ".$e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $facturacion = Facturacion::findOrFail($id);
            $facturacion->delete();
            return redirect()->route('facturacion.index');
        } catch (Exception $e){

            return "Fatal error - ".$e->getMessage();
        }

    }

    public function edit($id){
        $facturacion = Facturacion::findOrFail($id);
        return view($this->path.'.edit', compact('facturacion'));
    }

    public function update(Request $request, $id){

        $facturacion = Facturacion::findOrFail($id);
        $facturacion->idCliente     = $request->idCliente;
        $facturacion->fecha   = $request->fecha;
        $facturacion->montoTotal = $request->montoTotal;
        $facturacion->subtotal  = $request->subtotal;
        $facturacion->impuesto  = $request->impuesto;
        $facturacion->idProducto  = $request->idProducto;
        $facturacion->save();
        return redirect()->route('facturacion.index');
    }
}
