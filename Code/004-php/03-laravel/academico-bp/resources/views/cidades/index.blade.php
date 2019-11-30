@extends('principal')

@section('conteudo')
    <ol>
        @foreach ($cidades as $c)
            <li><p>{{ $c->id }}</p></li>
            <li><p>{{ $c->nome }}</p></li>
            <li><p>{{ $c->estado->nome }}({{$c->estado->sigla}})</p></li>
        @endforeach
    </ol>
@endsection