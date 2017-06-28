@extends('layouts.app')

@section('content')

<h1>je suis content</h1>

<div style='width: 25px;height: 20px; background-color: red; transition: 2s'></div>

<h1>{{ $consototalJuil13 }}</h1>
<h1>{{ $consototalJuil14 }}</h1>

<div class="container">
  <div class="row">

    <div id="graph">
      200<br /> <br /> <br /> 100 <br /> <br /> <br /> 50 <br /> <br /> <br /> 0
    <ul>
        <li>{{ $consototalJuil13 }}:2013-07:lightblue</li>
        <li>{{ $consototalAout13 }}:2013-08:lightblue</li>
        <li>{{ $consototalJuil14 }}:2014-07:lightgreen</li>
        <!-- <li>80:2009:yellow</li>
        <li>14:2010:cyan</li> -->
    </ul>
    </div>
    <div id="labels">Années</div>


  </div>
</div>


<!-- @foreach ($consommations as $consommation)
{{ $consommation->temps }}
@endforeach
<input type='range' value='10'/>
@endsection -->
