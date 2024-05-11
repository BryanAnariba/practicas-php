<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';

    // Son los campos que se van a manipular en el modelo, por el ejemplo el id no por que es autogenerado por eso no se pone aqui
    // protected $fillable = ["title", "description", "deadline", "isDone"];

    // Son los campos que no se manipularan, es lo opuesto al fillable esto laravel lo asume
    // protected $guarded = [];

    // protected $casts = ["deadline" => "date"];
    
    // Campos a ocultar al responder al cliente, por ejemplo al hacer login y retornar el usuario el password no debemos mandarlo
    // protected $hidden = ["password"];
}
