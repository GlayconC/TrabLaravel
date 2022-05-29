@extends("layout")

@section('titulo')
    Editar cidade: 
@stop

@section('conteudo')
    <form method="POST" action="/cidades_update/{{$cidades->id}}">
        @csrf
        @method("PUT")
        <input type="text" name="nome" value="{{$cidades->nome}}">
        <input type="text" name="estado" step="0.01" min="0" value="{{$cidades->estado}}">  
        <button type="submit"> Enviar </button>
    </form>
@stop