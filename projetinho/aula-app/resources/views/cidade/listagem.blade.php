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
                <td>{{$cid->id}}</td>
                <td>{{$cid->nome}}</td>
                <td>{{$cid->estado}}</td>
                <td>
                    <a href="cidade_update/{{$cid->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline">Editar</ion-icon></a>
                    <form action="cidade_delete/{{$cid->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash outline">Deletar</ion-icon></button>
                    </form> 
                </td>
            </tr>
        @endforeach
    </table>
@stop