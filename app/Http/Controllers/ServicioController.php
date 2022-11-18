<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Client;

class ServicioController extends Controller
{
   /* public function index()
    {
        $id = auth()->user()->id;
        $servicios = Service::where('user_id', $id)->get();
        return view('servicios.servicios', compact('servicios'));

    }*/

    public function index()
    {
        return view('servicios.servicios');
    }
}

