<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pet;
use App\Models\Client;
class RegistroMController extends Controller
{
    //
    public function index()
    {
        $pets = Pet::All();
        return view('serviciofinal.serviciofinal')->with("pets",$pets);
    }
    public function registrarmascota(Request $formulario2)
    {
        $id = auth()->user()->id;
        $pets = new Pet;
        $pets->edad = $formulario2->edad;
        $pets->nombre = $formulario2->firstName;
        $pets->tipo = $formulario2->tipo;
        $pets->color = $formulario2->color;
        $pets->sexo = $formulario2->sexo;
        $pets->client_id= $id;
        $pets->save();
        return redirect("serviciofinal");
    }
}
