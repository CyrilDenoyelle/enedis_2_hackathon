@extends('layouts.app')

@section('content')
<link rel='stylesheet' href='/css/gaugestyle.css'>
<h1>gauge</h1>
<main style='background-color: blue;'>
<div id='gaugecontainer'>
	<img src='/img/compteur.png' alt='compteur' id='compteur'>
	<img src='/img/aiguille.png' alt='aiguille' id='aiguille'>
	<span id='compteurspan' style=''>{{ $spaneuro }}€/h</span>
</div>
</main>
@endsection
