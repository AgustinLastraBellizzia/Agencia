<?php

use App\Propiedad;

if (! function_exists('getLastPropiedades')) {
    function getLastPropiedades()
    {
        $propiedades = App\Propiedad::orderBy('id', 'DESC') -> paginate(5);
        return $propiedades;
    }
}