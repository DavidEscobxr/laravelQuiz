<?php

namespace App\Http\Controllers;

use App\Models\Cuartel;
use Illuminate\Http\Request;

class CuartelController extends Controller
{
    public function create()
    {
        return view('cuartels/create');
    }

    public function store(Request $request){
        
        $cuartel=new Cuartel();
        $cuartel->Nom_s=$request->Nom_c;
        $cuartel->Apell_s=$request->Ubic_c;
        $cuartel->save();  
  
      }
}
