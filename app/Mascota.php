<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $table = 'mascotas';
	protected $fillable = ['mas_nombre','mas_edad', 'mas_imagen', 'mas_apto', 'mas_castrado', 'mas_sexo', 'mas_descripcion'];
}
