@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
	<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
	<botao-modal alvo="modalTeste" tipo="buttonf" titulo="Novo Artigo"></botao-modal>
		<tabela-lista
		v-bind:titulos="['#','Título','Descrição']"
		v-bind:itens="{{$listaArtigos}}"
		criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="7887522323"
		ordem="desc" ordemCol='1'

		></tabela-lista>

	</painel>

</pagina>
<modal nome="modalTeste">
	<painel titulo="Novo Artigo">
	<formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
		</div>
		<button class="btn btn-success">Criar</button>
	</formulario>
	</painel>
</modal>
@endsection
