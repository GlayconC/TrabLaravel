@extends("layout")

@section('titulo')
    Cadastro de Pessoas</b>
@stop

@section('conteudo')
    <form method="POST" action="/pessoas/inserir">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
@stop
