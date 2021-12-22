@extends('layouts.cad')
@section('title', 'Editar')
@section('content')

<div class="container display-flex col-6 mt-5">
    @section('nav')Editar dados da Empresa
    @endsection
    <tr>
      <form method="post" action="{{url('/edit/'.$cad->id)}}" enctype="multipart/form-data">
          @csrf
          @method("PUT")
            <div class="form-group col-12">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" value="{{$cad->nome}}" autofocus required>
            </div>
  
            <div class="form-group col-12">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control"  name="endereco" value="{{$cad->endereco}}" required>
            </div>
          
            <div class="form-group col-12">
              <label for="logotipo">Logotipo ({{ $cad->logotipo }})</label>
              <input type="file" name="logotipo" class="form-control-file" >
              <input type="hidden" accept="image/jpg,image/jpeg"  class="form-control-file"  name="logotipo" value="{{$cad->logotipo }}" required>
            </div>
            
            <div class="form-group col-12">
              <label for="website">Website</label>
              <input type="text" class="form-control" name="website" value="{{$cad->website}}" required>  
            </div>
  
            <div class="form-group col-12 "align="right">
              <button type= "submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </tr>
</div>
@endsection
