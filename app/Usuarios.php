<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //

    public function scopeName($query, $name){

        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(primer_nombre, primer_apellido, segundo_apellido, numero_documento, ' ')"), "LIKE", "%$name%");
        }
        
    }

}
