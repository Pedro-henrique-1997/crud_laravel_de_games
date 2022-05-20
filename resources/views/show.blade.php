@extends('templates.template')

@section('content')

<h1 class="text-center">Visualizar dados</h1>

<div class="text-center">
<label>Nome: {{$ver_jogo->nome}}</label><br>
<label>Tipo: {{$ver_jogo->tipo}}</label><br>
<label>Versão: {{$ver_jogo->versao}}</label><br>
<label>Ano: {{$ver_jogo->ano}}</label><br>
</div>


@endsection