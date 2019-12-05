@extends('geral.principal')

@section('titulo','Área Geral - Estudantes')

@section('conteudo')

@if (Session::has('menssagem'))
<div class="alert mt-1 {{Session::get('classe-alerta','alert-info')}}">{{Session::get('menssagem')}}</div>
@endif

<form action="/geral/index" method="post">
  @csrf
  <label class="mt-1" for="area"><b>Informe a área de seu interesse</b></label>
  <div class="form-inline mb-3">
    <input class="form-control" type="text" name="area" id="area">
    <button class="btn btn-dark ml-2" type="submit">Buscar</button>
  </div>
</form>

@if (isset($professores))
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Área</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($professores as $professor)
          <tr>
              <td>{{$professor->id}}</td>
              <td>{{$professor->nome}}</td>
              <td>{{$professor->area}}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endif

@endsection