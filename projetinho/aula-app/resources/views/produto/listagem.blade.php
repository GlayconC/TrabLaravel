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
            <td>Valor</td>
            <td>Ações</td>
        </tr>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->preco}}</td>
                <td>
                    <a href="produto/edit/{{$p->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline">Editar</ion-icon></a>
                    <form action="produto_delete/{{$p->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash outline">Deletar</ion-icon></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@stop