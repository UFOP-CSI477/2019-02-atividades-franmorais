<?php

namespace App\Http\Controllers;
use App\projetosmodel;
use App\alunomodel;
use App\professormodel;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
       return view('layout.inicial');
    }

    

    public function relatorios(){
        $regs = projetosmodel::all();
        return view('geral.relatorio',compact('regs'));
    }
     public function about(){
        return view('about');
    }
}
