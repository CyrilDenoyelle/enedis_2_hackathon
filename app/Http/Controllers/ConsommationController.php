<?php

namespace App\Http\Controllers;

use App\Consommation;

class ConsommationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $consommations = Consommation::all();
        $consototalJuil13 = 0;
        $consototalJuil14 = 0;


        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2013-07'){
                $consototalJuil13 += $consommation->consoKWH;
            }
        }

        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2014-07'){
                $consototalJuil14 += $consommation->consoKWH;
            }
        }

        $consototalJuil13;
        $consototalJuil14;


        return view('conso', compact('consommations', 'consototalJuil13', 'consototalJuil14'));
    }

    //
}
