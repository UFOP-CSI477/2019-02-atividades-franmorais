<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alunomodel extends Model
{

	protected $primaryKey = 'id';
	protected $fillable = ['nome', 'curso'];
	protected $table = 'aluno';




     public function aluno(){
        return $this->belongsToMany(alunos::class);
    }
}
