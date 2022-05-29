@extends("layout")

@section('titulo')
    Detalhe de Pessoas <b>{{$pessoas->nome}}</b>
@stop

@section('conteudo')
    Detalhe da Pessoa <b>{{$pessoas->nome}}</b>
    <hr>
    Nome: {{$pessoas->nome}}<br>
    Descrição: {{$pessoas->descricao}}
@stop