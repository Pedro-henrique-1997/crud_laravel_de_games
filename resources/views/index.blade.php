@extends('templates.template')

@section('content')

<div class="text-center">
	<a href="{{route('cadastrar-jogo')}}"
	><button type="button" class="btn btn-success">Success</button></a>
</div>

<div class="col-8 m-auto">
	@csrf
	
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Tipo</th>
      <th scope="col">Versão</th>
      <th scope="col">Ano</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($listar_jogo as $row_game)
      <th scope="row">{{$row_game->nome}}</th>
      <td>{{$row_game->tipo}}</td>
      <td>{{$row_game->versao}}</td>
      <td>{{$row_game->ano}}</td>
      <td>
        <a href="{{route('deletar_jogo', ['id' => $row_game->id])}}">
          <button type="button" class="btn btn-danger">Excluir</button>
        </a>

        
        <a href="{{route('editar_jogo', ['id' => $row_game->id]) }}">
          <button type="button" class="btn btn-warning">Editar</button>
        </a>

        <a href="{{route('ver_jogo', ['id' => $row_game->id]) }}">
          <button type="button" class="btn btn-info">Visualizar</button>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

{{$listar_jogo->links()}}

@endsection