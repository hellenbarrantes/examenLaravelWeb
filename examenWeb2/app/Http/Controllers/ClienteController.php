<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClienteController extends Controller
{
     private $path ='cliente';

    public function index(){

        $data = Cliente::all();
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
            $cliente = new Cliente();
            $cliente->cedula     = $request->cedula;
            $cliente->nombre    = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->nacimiento  = $request->nacimiento;
            $cliente->direccion  = $request->direccion;
            $cliente->estadoCivil  = $request->estadoCivil;
            $cliente->genero = $request->genero;
            $cliente->fechaIngreso  = $request->fechaIngreso;
            $cliente->tipo  = $request->tipo;
            $cliente->descuento  = $request->descuento;
            $cliente->save();

            return redirect()->route('clientes.index');
        }
        catch(Exception $e){

            return "Fatal error - ".$e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
            return redirect()->route('clientes.index');
        } catch (Exception $e){

            return "Fatal error - ".$e->getMessage();
        }

    }

    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view($this->path.'.edit', compact('cliente'));
    }

    public function update(Request $request, $id){

        $Cliente = Cliente::findOrFail($id);
            $cliente->cedula     = $request->cedula;
            $cliente->nombre    = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->nacimiento  = $request->nacimiento;
            $cliente->direccion  = $request->direccion;
            $cliente->estadoCivil  = $request->estadoCivil;
            $cliente->genero = $request->genero;
            $cliente->fechaIngreso  = $request->fechaIngreso;
            $cliente->tipo  = $request->tipo;
            $cliente->descuento  = $request->descuento;
        $cliente->save();
        return redirect()->route('clientes.index');
    }
    
}
