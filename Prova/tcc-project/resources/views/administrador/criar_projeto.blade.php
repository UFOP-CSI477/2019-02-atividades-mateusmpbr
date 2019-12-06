@extends('administrador.principal')

@section('titulo','Área Administrativa - Colegiados')

@section('conteudo')

@if (Session::has('menssagem'))
<div class="alert mt-1 {{Session::get('classe-alerta','alert-info')}}">{{Session::get('menssagem')}}</div>
@endif

<div class="card mt-2">
    <div class="card-body">
        <form action="/administrador/projeto" method="post">
            @csrf
            <div class="form-group">
                <label for="aluno">Aluno</label>
                <select name="aluno" id="aluno" class="form-control">
                    @foreach ($alunos as $aluno)
                        <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="professor">Professor</label>
                <select name="professor" id="professor" class="form-control">
                    @foreach ($professores as $professor)
                        <option value="{{$professor->id}}">{{$professor->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
            </div>
            <div class="form-group">
                <label for="ano">Ano</label>
                <input type="number" class="form-control" name="ano" id="ano">
            </div>
            <div class="form-group">
                <label for="semestre">Semestre</label>
                <input type="number" class="form-control" name="semestre" id="semestre">
            </div>
            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </form>
    </div>
</div>

@endsection