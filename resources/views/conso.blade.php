@extends('layouts.app')

@section('content')

<h1>je suis content</h1>

<div style='width: 25px;height: 20px; background-color: red; transition: 2s'></div>

<h1>{{ $consototalJuil13 }}</h1>
<h1>{{ $consototalJuil14 }}</h1>

@foreach ($consommations as $consommation)
{{ $consommation->temps }}
@endforeach
<input type='range' value='10'/>
@endsection
