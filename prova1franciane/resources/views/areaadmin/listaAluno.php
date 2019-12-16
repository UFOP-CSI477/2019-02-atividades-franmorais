@extends('layout.inicial')

@section('titulo', 'Lista de alunos')

@section('conteudo')
    <div class="container">
        <br>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                    <tr scope="row">
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->curso}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('areaadmin')}}" class="btn btn-warning">Voltar</a>
    </div>
@endsection