<?php

namespace elcuyano;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table="articulos";

    protected $primaryKey="cod";

    protected $dateFormat = 'U';
 
    protected $fillable = ['cod', 'descripcion','cod_proveedor','stock','limite','created_at','updated_at'];
 

}
