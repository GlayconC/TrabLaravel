@extends("layout")

@section('titulo')
    Detalhe da Estados <b>{{$estados->nome}}</b>
@stop

@section('conteudo')
    Detalhe do Estado <b>{{$estados->nome}}</b>
    <hr>
    Nome: {{$estados->nome}}<br>
    Descrição: {{$estados->descricao}}
@stop