@extends('layouts.cad')
@section('title', 'Cadastrar')
@section('content')

<div class="container display-flex col-6 mt-5">
  
  @section('nav')Cadastrar Empresa
  @endsection
  
  <tr>
    <form method="post" action="{{url('/create')}}" enctype="multipart/form-data">
        @csrf
          <div class="form-group col-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome da empresa" required>
          </div>

          <div class="form-group col-12">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control"  name="endereco" placeholder="rua exemplo 11" required>
          </div>
        
          <div class="form-group col-12">
            <label for="logotipo">Logotipo</label>
            <input type="file" accept="image/jpg,image/jpeg"  class="form-control-file"  name="logotipo" placeholder="logo" required>
          </div>
          
          <div class="form-group col-12">
            <label for="website">Website</label>
            <input type="text" class="form-control" name="website" placeholder="www.exemplo.com" required>  
          </div>

          <div class="form-group col-12 "align="right">
            <button type= "submit" class="btn btn-primary">Salvar</button>
          </div>
      </form>
  </tr>

</div>
@endsection
