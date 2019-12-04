@extends('usuario.principal')

@section('content')
    <div class="row">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td>{{$request->subject->name}}</td>
                        <td>{{$request->description}}</td>
                        <td>{{$request->date}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditar{{$request->id}}">
                                Editar
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir{{$request->id}}">
                                Excluir
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach ($requests as $request)
        <!-- Modal Editar-->
        <div class="modal fade" id="modalEditar{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditar">Editar Requerimento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('usuario.editar_requerimento')}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control" required>
                                @foreach ($subjects as $subject)
                                    <option value="{{$subject->id}}"
                                        @if ($subject->id == $request->subject_id)
                                            selected
                                        @endif
                                    >
                                        {{$subject->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input class="form-control" name="data" type="date" placeholder="Insira a data aqui" value="{{$request->date}}" required>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" cols="30" rows="10" placeholder="Insira a descrição aqui" required>{{$request->description}}</textarea>
                        </div>
                        <input type="hidden" name="id" value={{$request->id}}>
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

    @foreach ($requests as $request)
        <!-- Modal Excluir-->
        <div class="modal fade" id="modalExcluir{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="modalExcluir" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalExcluir">Você deseja excluir essa requisição?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('usuario.excluir_requerimento')}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <p>Isso não poderá ser desfeito.</p>
                        <input type="hidden" name="id" value={{$request->id}}>
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