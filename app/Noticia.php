<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    protected $table = 'noticias';
	protected $fillable = ['not_titulo','not_sub_titulo', 'not_contenido'];
}
