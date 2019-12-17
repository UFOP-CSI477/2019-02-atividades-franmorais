@extends('layout.inicial', ['page' => __('Inserir Projeto'), 'pageSlug' => 'users'])

@section('pageTitle', 'Inserir Projetos')

@section('conteudo')
    <div class="container ">
        <form class="form-group" action="{{route('geral.incluir')}}" method="POST">
            {{ csrf_field() }}
            <br>
            <label for="aluno_id">Aluno(a):</label>
            <select class="form-control col-sm-5" id="aluno_id" name="aluno_id">
                <option disabled selected value="-1">Escolha um(a) aluno(a)</option>
                @foreach($alunos as $aluno)
                    <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                @endforeach
            </select>
            <br>
            <label for="professor_id">Professor(a):</label>
            <select class="form-control col-sm-5" id="professor_id" name="professor_id">
                <option disabled selected value="-1">Selecione um(a) professor(a)</option>
                @foreach($professores as $professor)
                    <option value="{{$professor->id}}">{{$professor->nome}}</option>
                @endforeach
            </select>
            <label for="titulo">Título:</label>
            <input type="text" class="form-control col-sm-5" id="titulo" name="titulo" placeholder="Título">
            <label for="ano">Ano:</label>
            <input type="text" class="form-control col-sm-5" id="ano" name="ano" placeholder="2019">
            <label for="semestre">Semestre:</label>
            <input type="text" class="form-control col-sm-5" id="semestre" name="semestre" placeholder="192">
            <br>
            <input class="btn btn-warning" type="submit" value="Salvar">
            <a href="{{route('layout.home')}}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>

@endsection