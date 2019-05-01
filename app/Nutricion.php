<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutricion extends Model
{
    //
    public function scopeName($query, $name){

        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(created_at, ' ')"), "LIKE", "%$name%");
        }
        
    }
}
