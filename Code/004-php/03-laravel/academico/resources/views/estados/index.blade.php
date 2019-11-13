@extends('principal')

@section('conteudo')
    <ol>
        @foreach ($estados as $e)
            <li><p>{{ $e->nome }}</p></li>
        @endforeach
    </ol>
@endsection