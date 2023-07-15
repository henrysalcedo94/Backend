<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frontendForm extends Model
{
    use HasFactory;
    protected $table ="frontend_forms";
    protected $primaryKey ="id";
    protected $fillable =["nombre", "numero","mensaje"];
}
