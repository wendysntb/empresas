@extends('layouts.cad')
@section('title', 'Visualizar')
@section('content')

@section('nav')
Visualizar Empregado
@endsection

{{ csrf_field() }}
<input id="id" name="id" type="hidden" value="{{$cad->id}}">
    <div class="container justify-content-center">
        <div class="card card-default col-12  display-flex">
            <div class="card-body">
                <div class="btn-group  btn_top float-right" role="group" aria-label="Basic example">
                    <a class="btn btn-sm btn-outline-info" href="{{url('empregados/edit/'.$cad->id)}}" role="button">Editar</a>
                </div>
                <h4><span class="text-muted">Nome:</span> {{ $cad->nome }}</h4>
                <h4><span class="text-muted">Sobrenome:</span> {{ $cad->sobrenome}}</h4>
                <h4><span class="text-muted">Prontuário:</span> {{ $cad->prontuario}}</h4>
                <h4><span class="text-muted">Empresa:</span> {{ $cad->empresa->nome }}</h4>
                <h4><span class="text-muted">Email:</span> {{ $cad->email }}</h4>
                <h4><span class="text-muted">Telefone:</span> {{ $cad->telefone}}</h4>
            </div>
        </div>
    </div>

@endsection