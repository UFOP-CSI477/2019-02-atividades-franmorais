<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alunocontroller extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('curso','nome', asc)->get();
        return view ('alunos.index', [ 'alunos' => $alunos]);    
    }
}
