@extends('usuario.principal')

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