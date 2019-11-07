<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $primaryKey = 'id_blog';
    public $timestamps = false;
}
