@extends('layouts.cad')
@section('title', 'index')
@section('content')

@section('nav')
Visualizar Empresa
@endsection

{{ csrf_field() }}
<input id="id" name="id" type="hidden" value="{{$cad->id}}">
    <div class="container justify-content-center">
        <div class="card card-default col-12  display-flex">
            <div class="card-body">
                <div class="btn-group  btn_top float-right" role="group" aria-label="Basic example">
                    <a class="btn btn-sm btn-outline-info" href="{{url('edit/'.$cad->id)}}" role="button">Editar</a>
                </div>
                <h4><span class="text-muted">Nome:</span> {{ $cad->nome }}</h4>
                <h4><span class="text-muted">Endereço:</span> {{ $cad->endereco }}</h4>
                
                <h4><span class="text-muted">Logotipo:</span> 
                <img src="{{asset('storage/images/'.$cad->logotipo)}}" height="50px"></h4>

                <h4><span class="text-muted">Website:</span> {{ $cad->website }}</h4>
        
            </div>
            <div class="card-footer">
                <a class="btn btn-primary float-right" href="{{url('empregados/'.$cad->id)}}" role="button">Lista de Empregados</a>
            </div>
        </div>
    </div>

@endsection