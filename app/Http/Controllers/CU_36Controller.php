<?php

namespace App\Http\Controllers;

use App\Grup;
use App\Usuari;
use App\UsuariGrup;

class CU_36Controller extends Controller
{
    
    public function getCU_36(){
        $grups = Grup::all();
        $usuaris = Usuari::all();
        $usuariGrups = UsuariGrup::all();
        
     return view('CU_36_GestionarGrups', compact('grups','usuaris','usuariGrups'));
  }
}
