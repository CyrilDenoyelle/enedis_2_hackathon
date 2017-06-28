<?php

namespace App\Http\Controllers;

use App\Consommation;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $consommations = Consommation::all();
        $consototal = 0;
        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2013-07'){
                $consototal += $consommation->consoKWH;
            }
        }
        $consototal /= 2;
        return view('conso', compact('consommations', 'consototal'));
    }

    //
}
