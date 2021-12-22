@extends('layouts.cad')
@section('title', 'Editar')
@section('content')

<div class="container display-flex col-6 mt-5">
  
  @section('nav')Editar dados do Empregado
  @endsection
  
  <tr>
    <form method="post" action="{{url('/empregados/edit/'.$cad->id)}}">
      @method("PUT")
      @csrf
          <div class="form-group col-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{$cad->nome}}" required>
          </div>

          <div class="form-group col-12">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control"  name="sobrenome" value="{{$cad->sobrenome}}" required>
          </div>
          <div class="form-group col-12">
            <label for="prontuario">Prontuário</label>
          <input type="text" class="form-control" minlength="6" maxlength="6" name="prontuario" value="{{$cad->prontuario}}" required>
          </div>
          <input name="empresa_id" type="hidden" value="{{$cad->empresa_id}}">
          <div class="form-group col-12">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" value="{{$cad->email}}" required>  
          </div>
          <div class="form-group col-12">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" name="telefone" value="{{$cad->telefone}}">  
          </div>
          <div class="form-group col-12 "align="right">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
    </form>
  </tr>

</div>
@endsection
