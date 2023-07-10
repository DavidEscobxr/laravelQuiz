<?php

namespace App\Http\Controllers;

use App\Models\Soldado;
use Illuminate\Http\Request;

class SoldadoController extends Controller

{
    public function create()
    {
        return view('soldados/create');
    }

    public function store(Request $request){
        
        $soldado=new Soldado();
        $soldado->Nom_s=$request->Nom_s;
        $soldado->Apell_s=$request->Apell_s;
        $soldado->Grado_s=$request->Grado_s;
        $soldado->save();  
  
      }
}

