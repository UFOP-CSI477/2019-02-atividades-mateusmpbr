@extends('administrador.principal')

@section('content')
    <div class="row" style="overflow:auto">
        @if (Session::has('menssagem'))
            <div class="alert {{Session::get('classe-alerta','alert-info')}}">{{Session::get('menssagem')}}</div>
        @endif
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->price}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditar{{$subject->id}}">
                                Editar
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir{{$subject->id}}">
                                Excluir
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach ($subjects as $subject)
        <!-- Modal Editar-->
        <div class="modal fade" id="modalEditar{{$subject->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditar">Editar Protocolo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('administrador.editar_protocolo')}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" name="nome" type="text" placeholder="Insira o nome aqui" value="{{$subject->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input class="form-control" name="preco" type="text" placeholder="Insira o preço aqui" value="{{$subject->price}}" required>
                        </div>
                        <input type="hidden" name="id" value={{$subject->id}}>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($subjects as $subject)
        <!-- Modal Excluir-->
        <div class="modal fade" id="modalExcluir{{$subject->id}}" tabindex="-1" role="dialog" aria-labelledby="modalExcluir" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalExcluir">Você deseja excluir esse protocolo?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('administrador.excluir_protocolo')}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <p>Isso não poderá ser desfeito.</p>
                        <input type="hidden" name="id" value={{$subject->id}}>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endforeach
    
@endsection