@extends("layout")

@section('titulo')
    Editar produto: 
@stop

@section('conteudo')
    <form method="POST" action="/produto_update/{{$produtos->id}}">
        @csrf
        @method("PUT")
        <input type="text" name="nome" value="{{$produtos->nome}}">
        <input type="number" name="preco" step="0.01" min="0" value="{{$produtos->preco}}">
        <button type="submit"> Enviar </button>
    </form>
@stop