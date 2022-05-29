@extends("layout")


@section('titulo')
    Listagem de Estados
@stop

@section('conteudo')
    Listagem de Estados
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>Sigla</td>
            <td>Nome</td>
            <td>Ações</td>
        </tr>
        @foreach ($estados as $est)
            <tr>
                <td><a href="estados/{{$est->cep}}">{{$est->sigla}}</a></td>
                <td>{{$est->nome}}</td>
                <td>
                    <a href="estados_update/{{$est->cep}}">Editar</a>
                    <a href="estados_delete/{{$est->cep}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop