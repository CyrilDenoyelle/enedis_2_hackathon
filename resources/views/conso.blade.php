@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row thegraph">


      <h2 >Graphique de consommation bimensuel en Euro</h2>
      <h3>Prix en euro HT / KWh</h3>
    <div id="graph">
    <ul>
        <li>{{ $consototalJuil13 }}:07-13:white</li>
        <li>{{ $consototalAout13 }}:08-13:white</li>
        <li>{{ $consototalJuil14 }}:07-14:#CEDC00</li>
        <li>{{ $consototalAout14 }}:08-14:#CEDC00</li>
        <li>{{ $consototalJuil15 }}:07-15:#3B5999</li>
        <li>{{ $consototalAout15 }}:08-15:#3B5999</li>
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
<input type='range' value='10'/> -->
@endsection
