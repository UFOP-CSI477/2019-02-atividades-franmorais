@extends('layout.inicial')

@section('titulo', 'relatorio')

@section('conteudo')
    <div class="container">
        <form class="form-group">
            <br>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Ano</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Id</th>
                        <th scope="col">Professor</th>
                        <th scope="col">Aluno</th>
                        <th scope="col">Título</th>
                        <th scope="col">Área</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proj as $projetosmodel)
                        <tr scope="row">
                            <td>{{$proj->ano}}</td>
                            <td>{{$proj->semestre}}</td>
                            <td>{{$proj->id}}</td>
                            <td>{{$proj->nome_al}}</td>
                            <td>{{$proj->nome_prof}}</td>
                            <td>{{$proj->titulo}}</td>
                            <td>{{$proj->area}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <a href="{{route('areageral')}}" class="btn btn-warning">Voltar</a>
        </form>
    </div>
@endsection