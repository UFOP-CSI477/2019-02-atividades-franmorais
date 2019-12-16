@extends('layout.inicial')

@section('titulo', 'Relatório')

@section('conteudo')
    <div class="container">
        <form class="form-group">
            <br>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Professor</th>
                        <th scope="col">Área</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prof as $professormodel)
                        <tr scope="row">
                            <td>{{$prof->id}}</td>
                            <td>{{$prof->nome}}</td>
                            <td>{{$prof->area}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('areageral')}}" class="btn btn-warning">Voltar</a>
        </form>
    </div>
@endsection