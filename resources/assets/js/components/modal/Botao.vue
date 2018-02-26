<template>
<div>
<button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + alvo">{{titulo}}</button>
<button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + alvo">{{titulo}}</button>
<a v-if="tipo == 'link'" href="" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + alvo">{{titulo}}</a>
</div>
</template>

<script>
	export default {
		props:['alvo','tipo','titulo','css']
	}
</script>
