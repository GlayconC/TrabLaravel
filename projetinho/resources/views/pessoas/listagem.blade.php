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
            <td>Produto</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>
        @foreach ($pessoas as $pes)
            <tr>
                <td><a href="pessoas/{{$pes->cep}}">{{$pes->cpf}}</a></td>
                <td>{{$pes->nome}}</td>
                <td>{{$pes->nascimento}}</td>
                <td>{{$pes->produto}}</td>
                <td>{{$pes->cidade}}</td>
                <td>
                    <a href="pessoas_update/{{$pes->cep}}">Editar</a>
                    <a href="pessoas_delete/{{$pes->cep}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop