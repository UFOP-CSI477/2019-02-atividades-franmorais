<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professormodel
use DB;

class professorcontroller extends Controller
{
    public function professoresIndex(Request $prof){
       

    
        $professor=professormodel::where('area', 'like', "%$prof->area%")->orderBy('area', 'ASC')->orderBy('nome', 'ASC')->get();        
        return view('geral.listap',compact('professor'));
    
    }
}
