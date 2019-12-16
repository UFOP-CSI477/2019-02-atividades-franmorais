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
	$projeto= new projetosmodel;
	$prof= new professormodel;

       function index(){

            $result = DB::table('professormodel')
                        ->select('id','name','area')
                        ->orderBy('area', 'asc')->orderBy('name', 'asc')->get();

            $resultado = DB::table('alunomodel')
                        ->select('id','nome','curso')
                        ->orderBy('curso', 'asc')->orderBy('nome', 'asc')->get();


                        return view('areaadmin', ['prof' => $result],['aluno'=>$resultado]);

            return view('areaadmin');
        }


    public fuction inserir(){
    	

		$projeto->titulo = $request->titulo ;
		$projeto->ano = $request->ano;
		$projeto->semestre= $request->semestre;
		
		$projeto->save();

		return view('/')
        
	}

	public function update(Projetos $projeto, Request $request){


	
		$projeto->titulo = $request->titulo ;
		$projeto->ano = $request->ano;
		$projeto->semestre= $request->semestre;
		return view('/')
		

	}

	public function delete(projetomodel $projeto){
		$product->delete();
		return view('Registro deletado')
	}

	public function buscaProf(Request $request){

		$prof = professormodel::where('area', 'LIKE', % .$request->texto.%)
			->orderBy('area', asc, 'nome', asc)
			->get();
		if(empty($result->items)){
            $result = DB::table('professormodel')->select('id','nome','area')->get();
        }

        return view('pesquisaarea', ['professor' => $result]);

	}

	public function buscaProject(Request $request){
		        &resultproj = DB::table('projetomodel as x')
        ->join('alunomodel as a', 'x.aluno_id', '=','a.id')
        ->join('users as s', 'x.professor_id', '=','s.id')
        ->select('x.id','s.nome', 'a.nome','s.area','x.semestre','x.ano','x.titulo')
        ->orderBy('x.ano', 'desc')
        ->orderBy('x.semestre', 'desc')
        ->orderBy('a.nome','asc')
        ->get();
        return view('areageral', ['todos' => $resultproj]);
    }

}


        