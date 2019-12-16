@extends('layout.inicial')

@section('titulo', 'Área Geral')

@section('conteudo')
    <br>
    <div class="container">
        <h2>Listar Professores</h2>
        <form action="{{route('areageral.pesquisa')}}" method="POST" class="form-inline my-3 my-lg-0">
            {{ csrf_field() }}
            <input class="form-control mr-2" name="texto" style="width: 60%" type="text" placeholder="Listar" aria-label="Listar">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Pesquisa</button>
        </form>
        <br>
        <p>Lista de Projetos</p>
        <form action="{{route('areageral.listaproj')}}" method="GET" class="form-inline my-3 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Listas</button>
        </form>
        <!--<table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Área de Atuação</th>
                </tr>
            </thead>
            <tbody>
            
                
            </tbody>
        </table>
    </div>
@endsection