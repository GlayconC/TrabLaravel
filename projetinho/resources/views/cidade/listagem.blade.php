@extends("layout")


@section('titulo')
    Listagem de Cidades
@stop

@section('conteudo')
    Listagem de Cidades
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>CEP</td>
            <td>Nome</td>
            <td>Estado</td>
            <td>Ações</td>
        </tr>
        @foreach ($cidade as $cid)
            <tr>
                <td><a href="cidade/{{$cid->cep}}">{{$cid->cep}}</a></td>
                <td>{{$cid->nome}}</td>
                <td>{{$cid->estado}} R$</td>
                <td>
                    <a href="cidade_update/{{$cid->cep}}">Editar</a>
                    <a href="cidade_delete/{{$cid->cep}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop