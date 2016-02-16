<?php

namespace elcuyano;

use Illuminate\Database\Eloquent\Model;

class movart extends Model
{
    protected $table="movarts";

    public $timestamps = false;

    protected $fillable = ['cod_art', 'cod_mov','cant'];
}
