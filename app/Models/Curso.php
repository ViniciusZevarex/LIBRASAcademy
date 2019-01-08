<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected   $table          = 'curso';
    public      $timestamps     = false;

    protected   $fillable       = array('Titulo');

    protected $guarded = ['CodCurso'];
}
