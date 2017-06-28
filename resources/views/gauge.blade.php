@extends('layouts.app')

@section('content')
<link rel='stylesheet' href='/css/gaugestyle.css'>
<main>
<h2>consommation actuelle</h2>
<div id='gaugecontainer'>
	<img src='/img/compteur.png' alt='compteur' id='compteur'>
	<img src='/img/aiguille.png' alt='aiguille' id='aiguille' style="transition: 2s;">
	<span id='compteurspan' style=''>{{ $spaneuro }}€/h</span>
</div>
</main>
<a class="btn btn-primary btn-block" href='/conso'>conso</a>

@endsection

@section('scriptation')
<script>
	setTimeout(function(){
		$('#aiguille').css('transform', 'rotate({{ $consommation }}deg')
	}, 2000)
</script>
@endsection
