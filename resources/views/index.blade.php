@extends('layouts.app')
@section('title', 'index')
@section('nav')
Empresas
@endsection

@section('url')
{{url('/search/')}}
@endsection

@section('content')
<a class="btn btn-primary float-right mb-3" href="{{url('/create')}}"> Cadastrar Empresa</a>

    @section('th')
        <th scope="col">Nome</th>
        <th class="">Endereço</th>
        <th class="">Logotipo</th>
        <th class="">Website</th>
        <th class=""></th>
    @endsection

    @section('tbody')

        @foreach ($list as $item)
        <tr>
            <td>{{$item->nome}}</td>
            <td>{{$item->endereco}}</td>
            <td><img src="{{asset('storage/images/'.$item->logotipo)}}" height="50px"></td>
            <td>{{$item->website}}</td>
            <td align="center">
                <div class="action">
                    <button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-th-list"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('show/'.$item->id)}}">Ver</a>
                        <a class="dropdown-item" href="{{url('edit/'.$item->id)}}">Editar</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        <span>{{ $list->links() }}</span>
    @endsection
@endsection