<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agente;

class AgentesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function listaAgentes(Request $request){
        $agentes = Agente::paginate(1);
        return view('admin.lista-agentes',[ 'agentes' => $agentes]);
    }
}
//route('dashboar')