@extends('usuario.principal')

@section('content')
    <div class="row">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <td>{{$request->subject->name}}</td>
                    <td><img src="data:image/jpeg;base64,{{base64_encode($request->description)}}"/></td>
                    <td>{{$request->date}}</td>
                    <td><a class="btn btn-success" href="" style="margin-left:50px;">Editar</a></td>
                    <td><a class="btn btn-danger" href="" style="margin-left:-50px;">Excluir</a></td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection