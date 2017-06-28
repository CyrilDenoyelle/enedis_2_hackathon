@extends('layouts.app')

@section('content')

<h1>je suis content</h1>

<div style='width: 25px;height: 20px; background-color: red; transition: 2s'></div>

<h1>{{ $consototal }}</h1>

@foreach ($consommations as $consommation)
{{ $consommation->temps }}
@endforeach
<input type='range' value='10'/>
@endsection