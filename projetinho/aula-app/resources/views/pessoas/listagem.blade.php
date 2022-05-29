@extends("layout")


@section('titulo')
    Listagem de Pessoas
@stop

@section('conteudo')
    Listagem de Pessoas
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>CPF</td>
            <td>Nome</td>
            <td>Nascimento</td>
            <td>Código do Produto</td>
            <td>Cidade Id</td>
            <td>Ações</td>
        </tr>
        @foreach ($pessoas as $pes)
            <tr>
                <td>{{$pes->id}}</td>
                <td>{{$pes->nome}}</td>
                <td>{{$pes->nascimento}}</td>
                <td>{{$pes->produto}}</td>
                <td>{{$pes->cidade}}</td>
                <td>
                    <a href="pessoas/edit/{{$pes->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline">Editar</ion-icon></a>
                    <form action="pessoas_delete/{{$pes->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash outline">Deletar</ion-icon></button>
                    </form>  
                </td>
            </tr>
        @endforeach
    </table>
@stop