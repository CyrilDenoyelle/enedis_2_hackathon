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
        $consototalAout13 = 0;
        $consototalAout14 = 0;


        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2013-07'){
                $consototalJuil13 += $consommation->consoKWH;
            }
        }

        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2013-08'){
                $consototalAout13 += $consommation->consoKWH;
            }
        }

        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2014-07'){
                $consototalJuil14 += $consommation->consoKWH;
            }
        }


        $consototalJuil13 = $consototalJuil13/2500;
        $consototalAout13 = $consototalAout13/2500;

        $consototalJuil14 = $consototalJuil14/2500;


        $consototalJuil13 = (int) $consototalJuil13;
        $consototalAout13 = (int) $consototalAout13;

        $consototalJuil14 = (int) $consototalJuil14;


        return view('conso', compact('consommations', 'consototalJuil13', 'consototalAout13' , 'consototalJuil14'));
    }

    //
}
