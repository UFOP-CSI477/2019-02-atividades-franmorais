@extends('layout.incial')

@section('titulo', 'Lista de professores')

@section('conteudo')
    <div class="container">
        <form class="form-group">
            <br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Área </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professores as $prof)
                        <tr scope="row">
                            <td>{{$prof->id}}</td>
                            <td>{{$prof->nome}}</td>
                            <td>{{$prof->area}}</td>
                        </tr>
                   @endforeach  
                </tbody>
            </table>
            <a href="{{route('areaadm')}}" class="btn btn-warning">Voltar</a>
        </form>
    </div>
@endsection