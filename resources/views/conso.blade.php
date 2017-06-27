@extends('layouts.app')

@section('content')

<h1>je suis content {{ $hauteur }}</h1>

<div style='width: 25px;height: {{ $hauteur }}px; background-color: red'></div>

@foreach ($consomations as $consomation)
{{ $consomation->id }}
@endforeach
<input type='range' value='10'/>
@endsection