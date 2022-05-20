@extends('templates.template')

@section('content')

<h1 class="text-center">Deletar Jogo</h1>

<form method="post" action="{{route('excluir_jogo', ['id' => $del_game->id ])}}">
	@csrf
	<h2>Deseja deletar este jogo?</h2>
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
		</div>
		<input type="text" name="nome" class="form-control" aria-label="Default" value="{{$del_game->nome}}" aria-describedby="inputGroup-sizing-default">
	</div>

		<input type="submit" name="excluir" class="btn btn-success">

	
</form>

@endsection