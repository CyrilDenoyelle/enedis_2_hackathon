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
        $consototalAout13 = 0;

        $consototalJuil14 = 0;
        $consototalAout14 = 0;

        $consototalJuil15 = 0;
        $consototalAout15 = 0;

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

        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2014-08'){
                $consototalAout14 += $consommation->consoKWH;
            }
        }

        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2015-07'){
                $consototalJuil15 += $consommation->consoKWH;
            }
        }

        foreach ($consommations as $consommation) {
            if(explode('-', $consommation->temps)[0].'-'.explode('-', $consommation->temps)[1] == '2015-08'){
                $consototalAout15 += $consommation->consoKWH;
            }
        }

        //on met a l echelle
        $consototalJuil13 = $consototalJuil13/2500;
        $consototalAout13 = $consototalAout13/2500;

        $consototalJuil14 = $consototalJuil14/2500;
        $consototalAout14 = $consototalAout14/2500;

        $consototalJuil15 = $consototalJuil15/2500;
        $consototalAout15 = $consototalAout15/2500;


        //PARSE les resultat mis a l echelle
        $consototalJuil13 = (int) $consototalJuil13;
        $consototalAout13 = (int) $consototalAout13;

        $consototalJuil14 = (int) $consototalJuil14;
        $consototalAout14 = (int) $consototalAout14;

        $consototalJuil15 = (int) $consototalJuil15;
        $consototalAout15 = (int) $consototalAout15;

        return view('conso', compact('consommations', 'consototalJuil13', 'consototalAout13' , 'consototalJuil14', 'consototalAout14', 'consototalJuil15', 'consototalAout15'));
    }
}
