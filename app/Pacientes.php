<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    //
    public function scopeName($query, $name){

        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(cedula, nombre_paciente, ' ')"), "LIKE", "%$name%");
        }
        
    }
}
