<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    protected $table='peliculas';
    protected $primarykey='id';
    protected $filable=['descripcion','director_id','añio','genero_id','duracion'];
}
