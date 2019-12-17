<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alunomodel;
use db;

class alunocontroller extends Controller
{
    public function index(Request $alunos)
    {
       $alunos = alunomodel::where('curso', 'like', "%$alunos->area%")->orderBy('curso', 'ASC')->orderBy('nome', 'ASC')->get(); 
        return view('geral.listaaluno', compact('alunos'));

    }
}
