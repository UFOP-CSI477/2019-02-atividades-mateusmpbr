<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    // Professor -> Projeto (1:N)
    public function projetos(){
        return $this->hasMany('App\Projeto');
    }
}
