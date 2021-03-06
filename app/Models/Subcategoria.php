<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $fillable= [
        'nombre',
        'descripcion',
        'categoria_id'
    ];
    public function categoria(){
        return $this->belongsTo("App\Categoria");
    }
    public function empresa(){
        return $this->hasMany("App\Empresa");
    }
}
