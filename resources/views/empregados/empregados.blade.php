@extends('layouts.app')
@section('title', 'Empregados')
@section('nav')
Lista de Empregados
@endsection

@section('url')
{{url('/empregados/'.$id.'/search/')}}
@endsection

@section('content')

<a class="btn btn-primary float-right mb-3" href="{{url('/empregados/create/'.$id)}}"> Cadastrar Empregado</a>
  @section('th')
      <th scope="col">Nome</th>
      <th class="">Sobrenome</th>
      <th class="">Prontuário</th>
      <th class="">Empresa</th>
      <th class="">Email</th>
      <th class="">Telefone</th>
      <th class=""></th>
  @endsection

  @section('tbody')

    @foreach ($list as $item)
      <tr>
        <td>{{$item->nome}}</td>
        <td>{{$item->sobrenome}}</td>
        <td>{{$item->prontuario}}</td>
        <td>{{$item->empresa->nome}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->telefone}}</td>
        <td align="center">
          <div class="action">
              <button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="glyphicon glyphicon-th-list"></i>
              </button>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('/empregados/show/'.$item->id)}}">Ver</a>
                  <a class="dropdown-item" href="{{url('/empregados/edit/'.$item->id)}}">Editar</a>
              </div>
          </div>
        </td>
      </tr>

    @endforeach
          <span>{{ $list->links() }}</span>
  @endsection
  
@endsection
