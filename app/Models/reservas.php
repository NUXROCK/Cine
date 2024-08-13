<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    protected $table='directores';
    protected $primarykey='id';
    protected $filable=['funcion_id','cliente_id','asientos'];
}
