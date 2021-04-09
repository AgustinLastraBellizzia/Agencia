<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function propiedad()
    {
        return $this->hasMany(Propiedad::class);
    }

}
