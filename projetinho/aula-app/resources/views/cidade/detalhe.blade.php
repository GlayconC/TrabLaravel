@extends("layout")

@section('titulo')
    Detalhe da Cidade <b>{{$cidade->nome}}</b>
@stop

@section('conteudo')
    Detalhe do Cidade <b>{{$cidade->nome}}</b>
    <hr>
    Nome: {{$cidade->nome}}<br>
    Descrição: {{$cidade->descricao}}
@stop