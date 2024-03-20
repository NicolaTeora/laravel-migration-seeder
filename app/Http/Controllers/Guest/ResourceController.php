<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * All'interno della funzione index() del controller, recuperate tutti i treni dal database
     *  e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
     */
    public function index()
    {
        //creo una collezione di Trains mettendola in una variabile
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
