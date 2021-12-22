@extends('layouts.cad')
@section('title', 'Cadastrar')
@section('content')

<div class="container display-flex col-6 mt-5">
  
  @section('nav')Cadastrar Empregado
  @endsection
  
  <tr>
    <form method="post" action="{{url('/empregados/create/')}}">
      @csrf
          <div class="form-group col-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome do Empregado" required>
          </div>

          <div class="form-group col-12">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control"  name="sobrenome" placeholder="Sobrenome do Empregado" required>
          </div>
          <div class="form-group col-12">
            <label for="prontuario">Prontuário</label>
          <input type="text" class="form-control" minlength="6" maxlength="6" name="prontuario" placeholder="Prontuário do Empregado" required>
          </div>
          <input name="empresa_id" type="hidden" value="{{$cad}}">
          <div class="form-group col-12">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email@xxx.com" required>  
          </div>
          <div class="form-group col-12">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" name="telefone" placeholder="(ddd) xxxxx-xxx">  
          </div>

          <div class="form-group col-12 "align="right">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
    </form>
  </tr>

</div>
@endsection
