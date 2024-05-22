<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aula';

    public $timestamps = false;

    protected $fillable = ['id', 'nombre', 'ubicacion'];
}
