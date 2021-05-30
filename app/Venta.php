<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
//
protected $fillable = ['fecha_compra', 'tipo_pago', 'monto_pago'];
}
