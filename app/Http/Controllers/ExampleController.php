<?php

namespace App\Http\Controllers;

use App\Consomation;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $consomations = Consomation::all();
        $hauteur = 50;
        // $hauteur = $hauteur*.1;
        return view('conso', compact('consomations', 'hauteur'));
    }

    //
}
