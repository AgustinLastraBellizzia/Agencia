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
    //protected $table = 'mi_propiedad';
}
