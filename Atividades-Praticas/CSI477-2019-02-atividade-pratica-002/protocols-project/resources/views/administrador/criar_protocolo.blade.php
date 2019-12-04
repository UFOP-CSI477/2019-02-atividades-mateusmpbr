@extends('administrador.principal')

@section('content')
    <div class="row">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('administrador.inserir_protocolo')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" name="nome" type="text" placeholder="Insira o nome aqui" required>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input class="form-control" name="preco" type="text" placeholder="Insira o preço aqui" required>
                        </div>
                        <button class="btn btn-dark">Criar Protocolo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection