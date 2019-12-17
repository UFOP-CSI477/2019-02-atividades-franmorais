@extends('layout.inicial', ['page' => __('About')])

@section('pageTitle', 'About')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('About') }}</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <h5>Prova de Sitemas Web</h5>
                        <h6>Aluna: Franciane Cristina de Morais</h6>
                        <h6>Matricula: 16.2.8533</h6>
                        <h6>Curso: Sistemas de Informação</h6>

                        return view('about');
                    </div>
                </div>                
            </div>            
        </div>
    </div>
        
@endsection