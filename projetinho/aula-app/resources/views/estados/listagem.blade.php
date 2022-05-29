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
                <td>{{$est->sigla}}</td>
                <td>{{$est->nome}}</td>
                <td>
                    <a href="estados_update/{{$est->sigla}}" class="btn btn-info edit-btn"><ion-icon name="create-outline">Editar</ion-icon></a>
                    <form action="estados_delete/{{$est->sigla}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash outline">Deletar</ion-icon></button>
                    </form>    
                </td>
            </tr>
        @endforeach
    </table>
@stop