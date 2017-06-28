<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consommation;

class GaugeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consommations = Consommation::all();
        $consommation = ($consommations[floor(rand(0, count($consommations)))]->consoKWH/800)*360;
        $spaneuro = $consommation*.1;
        if($consommation > 235){
            $consommation = 235;
        }
        return view('gauge', compact('consommation', 'spaneuro'));
    }

    
}
