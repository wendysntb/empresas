<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadEmpresa extends Model
{
    protected $fillable = ['id','nome','endereco','logotipo','website'];
}
