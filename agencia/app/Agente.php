<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }
}
