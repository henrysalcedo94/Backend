<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiCruds extends Model
{
    use HasFactory;
    protected $table ="api_Cruds";
    protected $primaryKey ="id";
    protected $fillable =["Nombre", "Apellido","Tipo_Identificacion","#_Identificacion","Telefono","Email","Profesion"];
}
