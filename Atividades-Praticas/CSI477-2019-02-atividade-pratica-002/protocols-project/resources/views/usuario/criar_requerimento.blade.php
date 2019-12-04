@extends('usuario.principal')

@section('content')
    <div class="row">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('usuario.inserir_requerimento')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control" required>
                                @foreach ($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input class="form-control" name="data" type="date" placeholder="Insira a data aqui" required>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" cols="30" rows="10" placeholder="Insira a descrição aqui" required></textarea>
                        </div>
                        <button class="btn btn-dark">Criar Requerimento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection