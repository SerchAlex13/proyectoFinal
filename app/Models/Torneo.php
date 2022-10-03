<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'sede', 'organizador', 'fundacion', 'formato', 'numero_equipos'];
    //protected $guarded = ['id'];
}
