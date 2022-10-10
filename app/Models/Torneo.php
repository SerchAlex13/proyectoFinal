<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'sede', 'organizador', 'fundacion', 'numero_ediciones', 'formato', 'numero_equipos'];
    //protected $guarded = ['id'];
    public $timestamps = false;
}

//descargar php para windows y ponerlo en /bin/php
//php 8.1 thread safe

//descargar assets css y js para html

//Instalar laravel 9.19 y volver a crear proyecto y repositorio

//node -v
//Descargar  binary de nodejs version 16 y ponerlo en la carpeta de /bin/nodejs
//npm -v
//npm install

//Configurar archivos css y js en vite.config.js

//materialize - css y js

//npm run build
//npm run dev

//Para usar assets en las vistas agregar en head
//Vite
//@vite(['resources/css/materialize.css', 'resources/cjs/materialize.js'])
//Mix
//<link rel="stylesheet" href="/css/materialize.css">
//<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">

//INSTALAR JETSTREAM
//jetstream livewire con blade
//composer require laravel/jetstream
//php artisan jetstream:install livewire --teams
//npm install
//npm run build
//php artisan migrate