@extends("layout")


@section('titulo')
    Listagem de Produtos
@stop

@section('conteudo')
    Listagem de Produtos
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach ($produtos as $p)
            <tr>
                <td><a href="produto/{{$p->IDProduto}}">{{$p->IDProduto}}</a></td>
                <td>{{$p->NomeProduto}}</td>
                <td>{{$p->QuantidadePorUnidade}}</td>
                <td>
                    <a href="produto_update/{{$p->IDProduto}}">Editar</a>
                    <a href="produto_delete/{{$p->IDProduto}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop