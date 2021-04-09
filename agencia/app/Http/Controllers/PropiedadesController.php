<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Propiedad;
use App\ImagenesPropiedad;


class PropiedadesController extends Controller
{
    function createPropiedad(Request $request){
        //return view('welcome');
    $propiedad = new Propiedad;
    $propiedad->titulo = "Departamentos torre empresarial";
    $propiedad->descripcion = "Hemosos departamentos";
    $propiedad->precio = 123456;
    $propiedad->localizacion = "Villahermosa";
    $propiedad->area = "150m2";
    $propiedad->cuartos = 2;
    $propiedad->banios = 2;
    $propiedad->garages= 2;
    $propiedad->categoria_id = 1;

    if($propiedad->save()){
        $data = array(
            'status' => 'success',
            'message' => 'Propiedad creada',
            'propiedad' => $propiedad
            
        );
    }else{
        $data = array(
            'status' => 'error',
            'message' => 'Propiedad no fue creada',
        );
    }

    return response()->json($data);
    }

    function listPropiedades(Request $request){
        $data = Propiedad::paginate(4);
        return response()->json($data);
    }

    function detallePropiedad(Request $request,$slug){
        $propiedad = Propiedad::where('slug', $slug) ->first();

        if(!$propiedad){
            return abort(404);
        }

        

        return view('detalle', [ 'propiedad' => $propiedad ]);
    }
}
