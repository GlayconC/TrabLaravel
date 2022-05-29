@extends("layout")

@section('titulo')
    Editar pessoa: 
@stop

@section('conteudo')
    <form method="POST" action="/pessoas_update/{id}">
        @csrf
        @method("PUT")
        Nome: <input type="text" name="nome" id="nome" value="{{$pessoas->nome}}">
          Nascimento: <input type="date" name="nascimento" id="nascimento" value="{{$pessoas->nascimento}}">
          Código do Produto: <input type="text" name="number" id="produto" value="{{$pessoas->produto}}">
          Id da Cidade: <input type="text" name="cidade" id="cidade" value="{{$pessoas->cidade}}">
        <input type="submit" value="Enviar">
    </form>
@stop