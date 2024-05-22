<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
protected $table = 'profesor';
    public $timestamps = false;
    public $primaryKey = 'id';
    protected $fillable = ['id', 'nombre', 'apellido', 'titulo'];
    public function imparte()
    {
        return $this->hasMany('App\Models\Imparte', 'p_idprofesor');
    }
}
