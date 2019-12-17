extends('layout.inicial', ['page' => __('Lista Professores')])

@section('pageTitle', 'Lista Professores')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                
                    @csrf
                    <h5 class="title">{{ __('Lista Professores') }}</h5>                        
                </div>
                <div class="card-body">
                    <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">{{ __('ID') }}</th>
                                <th scope="col">{{ __('Nome') }}</th>
                                <th scope="col">{{ __('Area') }}</th>
                            </thead>
                            <tbody>
                                @foreach ($professormodel as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->nome }}</td>
                                        <td>{{ $c->area }}</td>
                                    </tr>
                                @endforeach
                                return view('geral.listap');
                                
                            </tbody>
                        </table>
                </div>                
            </div>            
        </div>
    </div>
        
@endsection