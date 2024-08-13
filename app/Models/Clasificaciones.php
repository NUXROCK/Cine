<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    protected $table='categoria';
    protected $primarykey='id';
    protected $filable=['nombre','descripcion'];
}
