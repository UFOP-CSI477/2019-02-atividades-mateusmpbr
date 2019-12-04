@extends('usuario.principal')

@section('content')
    <div class="row" style="overflow:auto">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection