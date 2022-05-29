@extends("layout")

@section('titulo')
    Cadastro de Estados</b>
@stop

@section('conteudo')
    <form method="POST" action="/estados/inserir">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
@stop
