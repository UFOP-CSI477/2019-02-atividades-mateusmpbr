@extends('geral.principal')

@section('titulo','Área Geral - Estudantes')

@section('conteudo')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ano</th>
      <th scope="col">Semestre</th>
      <th scope="col">Professor</th>
      <th scope="col">Estudante</th>
      <th scope="col">Título</th>
      <th scope="col">Área</th>
    </tr>
  </thead>
  <tbody>
      @if ($projetos->isEmpty())
        <tr>
          <td colspan="7" class="text-center">Não há projetos cadastrados</td>
        </tr>
      @else
        @foreach ($projetos as $projeto)
            <tr>
                <td>{{$projeto->id}}</td>
                <td>{{$projeto->ano}}</td>
                <td>{{$projeto->semestre}}</td>
                <td>{{$projeto->professor->nome}}</td>
                <td>{{$projeto->aluno->nome}}</td>
                <td>{{$projeto->titulo}}</td>
                <td>{{$projeto->professor->area}}</td>
            </tr>
        @endforeach
      @endif
  </tbody>
</table>
@endsection