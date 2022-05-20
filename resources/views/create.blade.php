@extends('templates.template')

@section('content')

<h1 class="text-center">Cadastrar</h1>

<div class="col-8 m-auto">
	<form method="post" action="{{route('validar-jogo')}}">
	@csrf
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
		</div>
		<input type="text" name="nome" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
		</div>
		<input type="text" name="tipo" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Versão</span>
		</div>
		<input type="text" name="versao" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Ano</span>
		</div>
		<input type="integer" name="ano" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
	</div>

	<input type="submit" name="cadastrar" class="btn btn-success">


</form>
</div>


@endsection