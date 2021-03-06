<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'descripcion',
        'subcategoria_id'
    ];
    public function subcategoria(){
        return $this->belongsTo("App\Subcategoria");
    }
}
