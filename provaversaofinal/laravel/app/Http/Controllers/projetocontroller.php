<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request
use DB;
use App\projetosmodel;
use App\professormodel;
use App\alunomodel;

class projetocontroller extends Controller
{

       function index(){

           $tcc = projetomodel::join('alunos','projetos.aluno_id','=','alunos.id')->orderBy('ano', 'DESC')->orderBy('semestre', 'DESC')->orderBy('alunos.nome', 'ASC')->get('projetos.*');
      
        	return view('geral.listap', compact('tcc'));
    

                        
            
        }


  

	 public function addIndex(){

        $prof = professormodel::all();
        $aluno = alunomodel::all();
        $tcc = projetosmodel::all();
        return view('geral.inserir', compact('tcc'));
    }


      public function inserir(){

        $prof = professormodel::all();
        $aluno = alunomodel::all();
        return view('geral.incluir', compact('prof','aluno'));
    }

    public function salvar(Request $request){
        $proj = new projetosmodel;
        $proj->fill($request->all());
        
        $proj->save();

        return redirect()->route('relatorio.tcc');
    }

}
	
	 public function incluir(){

        $prof = professormodel::all();
        $aluno = alunomodel::all();
        return view('geral.incluir', compact('prof','aluno'));
    }

   
}