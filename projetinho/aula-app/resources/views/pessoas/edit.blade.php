@extends("layout")

@section('titulo')
    Editar pessoa: 
@stop

@section('conteudo')
    <form method="POST" action="/pessoas_update/{{$pessoas->id}}">
        @csrf
        @method("PUT")
         <input type="text" name="nome" value="{{$pessoas->nome}}">
           <input type="date" name="nascimento" value="{{$pessoas->nascimento}}">
           <input type="number" name="produto" value="{{$pessoas->produto}}">
           <input type="number" name="cidade" value="{{$pessoas->cidade}}">
        <button type="submit"> Enviar </button>
    </form>
@stop