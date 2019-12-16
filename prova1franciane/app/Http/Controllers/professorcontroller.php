<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class professorcontroller extends Controller
{
    public function professoresIndex(){
       
        $professores = professormodel::orderBy('area','asc','nome','asc')->get();
        return view('areaadmin.relatorio-prof',compact('professores'));
    }
}
