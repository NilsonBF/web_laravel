@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
	<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
		<tabela-lista
		v-bind:titulos="['#','Título','Descrição']"
		v-bind:itens="[[1,'PHP OO','Curso de PHP OO'],
		[2,'Vue JS','Curso de Vue JS'],
		[3,'Lorem ','Ipsum is simply'],
		[4,'Lorem Ipsum passage',', quis nostrud exercitation ullamco laboris '],
		[5,'Finibus Bonorum','eos et accusamus et iusto odio']]"
		criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="7887522323"
		ordem="desc" ordemCol='1'

		></tabela-lista>

	</painel>

</pagina>
@endsection
