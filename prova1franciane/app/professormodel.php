<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professormodel extends Model
{

	protected $primaryKey = 'id';
	protected $fillable = ['nome', 'area];
	protected $table = 'prof';

      public function professor(){
        return $this->belongsToMany(professores::class);
    }
}
