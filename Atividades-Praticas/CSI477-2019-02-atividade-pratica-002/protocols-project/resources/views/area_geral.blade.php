@extends('principal')

@section('titulo','Área Geral')

@section('conteudo')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
      @if ($subjects->isEmpty())
        <tr>
          <td colspan="2" class="text-center">Não há tipos de protocolos cadastrados</td>
        </tr>
      @else
        @foreach ($subjects as $subject)
            <tr>
                <td>{{$subject->name}}</td>
                <td>{{$subject->price}}</td>
            </tr>
        @endforeach
      @endif
  </tbody>
</table>
@endsection