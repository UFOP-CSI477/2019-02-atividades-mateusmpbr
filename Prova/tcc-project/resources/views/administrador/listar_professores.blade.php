@extends('administrador.principal')

@section('titulo','Área Administrativa - Colegiados')

@section('conteudo')

@if (Session::has('menssagem'))
<div class="alert mt-1 {{Session::get('classe-alerta','alert-info')}}">{{Session::get('menssagem')}}</div>
@endif

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

@endsection