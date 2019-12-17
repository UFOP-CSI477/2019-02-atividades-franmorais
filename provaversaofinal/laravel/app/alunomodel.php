<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alunomodel extends Model
{
 protected $fillable = [
        'nome', 'curso',
    ];

    public function projetos() {
        return $this->hasMany('App\projetosmodel');
      }
}