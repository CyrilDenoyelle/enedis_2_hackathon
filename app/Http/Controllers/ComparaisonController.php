<?php

namespace App\Http\Controllers;

use App\Consommation;
use Illuminate\Http\Request;

class ComparaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consommations = Consommation::all();
        $consototal = 0;
        foreach ($consommations as $consommation) {
            if($consommation->temps == '2013-07-01 00:30:00'){
                $consototal += $consommation->consoKWH;
            }
        }
        $consototal*=.1/1.1;
        $consototal= floor($consototal);
        return view('compareItems', compact('consommations', 'consototal'));
    }
}
