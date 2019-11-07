<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo_usuario extends Model
{
    protected $table = 'grupo_usuario';
    protected $primaryKey = 'id_grupo_usuario';
    public $timestamps = false;
}
