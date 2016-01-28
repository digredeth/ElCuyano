<?php

namespace elcuyano;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table="articulos";

    protected $primaryKey="cod";

    /*protected $timestamps=true;*/
 
    protected $fillable = ['cod', 'descripcion','cod_proveedor','stock','limite'];
 

}
