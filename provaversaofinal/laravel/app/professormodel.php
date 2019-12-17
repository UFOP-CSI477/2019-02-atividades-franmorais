<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class professormodel extends Model
{

	protected $fillable = [
        'nome', 'area',
    ];

    public function projetos() {
        return $this->hasMany('App\projetosmodel');
      }
}
