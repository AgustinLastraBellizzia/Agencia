<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Agente;

class ContactoContoller extends Controller
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

    public function saveContacto(Request $request){
        //Recibir info formulario
        $nombre = $request->input('inputName');
        $correo = $request->input('inputEmail');
        $comentario = $request->input('inputMessage');
        $propiedad_id = $request->input('propiedad_id');
        
        $agente = Agente::where('propiedad_id', $propiedad_id) ->latest('id')->first();

        $contacto = new Contacto();
        $contacto->nombre = $nombre;
        $contacto->correo = $correo;
        $contacto->comentario = $comentario;
        $contacto->propiedad_id = $propiedad_id;
        $contacto->agente_id = $agente->id;

        if($contacto->save()){
            $data = array(
                'status' => 'success',
                'message' => 'Contacto guardado',
                'contacto' => $contacto
                
            );

        }else{
            $data = array(
                'status' => 'error',
                'message' => 'Error al guardar contacto',
            );
        }
        return response()->json($data);
    }

}
