<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    // Projeto -> Aluno (N:1)
    public function aluno(){
        return $this->belongsTo('App\Aluno');
    }

    // Projeto -> Professor (N:1)
    public function professor(){
        return $this->belongsTo('App\Professor');
    }
}
