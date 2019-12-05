<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // Aluno -> Projeto (1:N)
    public function projetos(){
        return $this->hasMany('App\Projetos`');
    }
}
