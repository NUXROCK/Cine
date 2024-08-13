<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salas extends Model
{
    protected $table='directores';
    protected $primarykey='id';
    protected $filable=['nombre','capacidad'];
}
