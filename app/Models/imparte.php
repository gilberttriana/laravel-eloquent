<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imparte extends Model
{
    protected $table = 'imparte';

    public $timestamps = false;

    protected $fillable = ['c_codclase', 'p_idprofesor', 'a_idaula'];

    public function profesor()
    {
        return $this->belongsTo('App\Models\Profesor', 'p_idprofesor');
    }

    // Define otras relaciones aquí...
    public function clase()
    {
        return $this->belongsTo('App\Models\Clase', 'c_codclase');
    }

    public function aula()
    {
        return $this->belongsTo('App\Models\Aula', 'a_idaula');
    }

    // Define otros métodos aquí...
   

}
