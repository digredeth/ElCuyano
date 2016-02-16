<?php

namespace elcuyano;

use Illuminate\Database\Eloquent\Model;

class movimiento extends Model
{
    protected $table="movimientos";

    protected $primaryKey="cod";

    protected $fillable = ['tipo', 'commited_at','cod_usuario'];



}
