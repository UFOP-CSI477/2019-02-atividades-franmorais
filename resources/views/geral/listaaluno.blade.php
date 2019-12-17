@extends('layout.inicial', ['page' => __('Lista Aluno')])

@section('pageTitle', 'Lista Aluno')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                
                    @csrf
                    <h5 class="title">{{ __('Lista Aluno') }}</h5>                        
                </div>
                <div class="card-body">
                        <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <th scope="col">{{ __('ID') }}</th>
                                    <th scope="col">{{ __('Nome') }}</th>
                                    <th scope="col">{{ __('Curso') }}</th>
                                </thead>
                                <tbody>
                                    @foreach ($alunosmodel as $c)
                                        <tr>
                                            <td>{{ $c->id }}</td>
                                            <td>{{ $c->nome }}</td>
                                            <td>{{ $c->curso }}</td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                </div>                
            </div>            
        </div>
    </div>
        
@endsection