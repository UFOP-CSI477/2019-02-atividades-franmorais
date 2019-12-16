@extends('layout.inicial')

@section('titulo', 'Área Administrativa')

@section('conteudo')
  <br>
  <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lista Alunos</h4>
        <p class="card-text">Veja aqui a Lista de alunos cadastrados</p>
        <a href="{{route('areaadm.listaAluno')}}" class="btn btn-warning" style="width:60px">Listar</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lista Professores</h4>
        <p class="card-text">Veja aqui a lista de professores cadastrados .</p>
        <a href="{{route('areaadm.listaProfessor')}}" class="btn btn-warning" style="width:60px">Listar</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Inserir Novo Projeto</h5>
        <p class="card-text">Insira aqui um novo projeto </p>
        <br>
        <a href="{{route('areaadmin.inserir')}}" class="btn btn-warning" style="width:60px">Inserir</a>    
      </div>
    </div>
  </div>

@endsection