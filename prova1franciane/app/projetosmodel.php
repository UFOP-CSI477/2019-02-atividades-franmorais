<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projetosmodel extends Model
{

	protected $primaryKey = 'id';
	protected $fillable = ['titulo', 'ano', semestre];
	protected $table = 'project';

     public function projeto(){
        return $this->hasMany(projetos::class);
    }
}
}

