<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class projetosmodel extends Model
{
    protected $fillable = [
        'aluno_id', 'professor_id','titulo','ano','semestre',
    ];

    public function aluno() {
        return $this->belongsTo('App\alunomodel');
    }

    public function professor() {
        return $this->belongsTo('App\professormodel');
      }

}
