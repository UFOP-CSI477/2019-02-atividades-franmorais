@extends('layout.inicial')

@section('titulo', 'Inserir um novo projeto')

@section('conteudo')
    <div class="container ">
        <form class="form-group" action="{{route('areaadmin.inserir')}}" method="POST">
            {{ csrf_field() }}
            <br>
            <label for="aluno_id">Inserir novo aluno(a):</label>
            <select class="form-control col-sm-5" id="aluno_id" nome="aluno_id">
                <option disabled selected value="-1">Escolha um aluno</option>
                @foreach($alunos as $aluno)
                    <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                @endforeach
            </select>
            <br>
            <label for="professor_id"> Inserir novo professor(a):</label>
            <select class="form-control col-sm-5" id="professor_id" name="professor_id">
                <option disabled selected value="-1">Escolha um professor(a)</option>
                @foreach($professores as $prof)
                    <option value="{{$professor->id}}">{{$professor->nome}}</option>
                @endforeach
            </select>
            <label for="titulo">Título:</label>
            <input type="text" class="form-control col-sm-5" id="titulo" name="titulo" placeholder="Título">
            <label for="ano">Ano:</label>
            <input type="text" class="form-control col-sm-5" id="ano" name="ano" placeholder="ano">
            <label for="semestre">Semestre:</label>
            <input type="text" class="form-control col-sm-5" id="semestre" name="semestre" placeholder="semestrer">
            <br>
            <input class="btn btn-warning" type="submit" value="Enviar">
            <a href="{{route('areaadmin')}}" class="btn btn-danger"Voltar</a>
        </form>
    </div>

@endsection