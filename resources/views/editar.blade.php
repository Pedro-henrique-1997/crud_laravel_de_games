@extends('templates.template')

@section('content')

<h1 class="text-center">Editar</h1>

<div class="col-8 m-auto">
	<form method="post" action="{{route('valEdit_jogo', ['id' => $edit_game->id]) }}">
	@csrf
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
		</div>
		<input type="text" value="{{$edit_game->nome}}" name="nome" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
		</div>
		<input type="text" name="tipo" value="{{$edit_game->tipo}}" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Versão</span>
		</div>
		<input type="text" name="versao" value="{{$edit_game->versao}}" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Ano</span>
		</div>
		<input type="integer" value="{{$edit_game->ano}}" name="ano" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	<input type="submit" name="cadastrar" class="btn btn-success">


</form>
</div>


@endsection