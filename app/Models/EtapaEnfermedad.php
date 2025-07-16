<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtapaEnfermedad extends Model
{
   protected $table = 'etapas_enfermedad'; // nombre exacto de la tabla
    public $timestamps = false; // Si tu tabla no tiene created_at y updated_at
}
