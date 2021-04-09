<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Propiedad extends Model
{
    use Sluggable;
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    //protected $table = 'propiedades';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function imagenes_propiedad()
    {
        return $this->hasMany(ImagenesPropiedad::class);
    }

    public function agente()
    {
        return $this->hasMany(Agente::class);
    }
}
