<?php

namespace elcuyano;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table="proveedors";

    protected $primaryKey="cod";

    protected $fillable = ['cod', 'descripcion'];
}
