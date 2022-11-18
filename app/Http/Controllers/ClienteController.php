<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class Controller extends Controller
{
    //
    public function index()
        {
            $cliente = Client::All();
            return view('datomascotas.datomascotas')->with("cliente",$cliente);
        }
        public function registrarcliente(Request $formulario)
        {
            $cliente = new Client;
            $cliente->nombres=$formulario->firstName;
            $cliente->apellidos=$formulario->lastName;
            $cliente->telefono=$formulario->celular;
            $cliente->direccion=$formulario->address;
            $cliente->save();
            return redirect("datomascotas");
        }
}

