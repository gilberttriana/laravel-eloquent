<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $table = 'clase';
    public $timestamps = false;
    protected $primaryKey = 'codclase';
    protected $fillable = ['codclase', 'nombre', 'credito'];

}
