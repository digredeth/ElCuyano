<?php

namespace elcuyano;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table="articulos";

    protected $primaryKey="cod";
 
    protected $fillable = ['cod', 'descripcion','cod_proveedor','stock','limite'];
 

}
