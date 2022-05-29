@extends("layout")

@section('titulo')
    Cadastro de Cidade</b>
@stop

@section('conteudo')
    <form method="POST" action="/cidade/inserir">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
@stop
