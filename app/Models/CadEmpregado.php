<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadEmpregado extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nome','sobrenome','prontuario','empresa_id', 'email', 'telefone'];

    public function empresa(){
        return $this->hasOne(CadEmpresa::class, 'id', 'empresa_id');
    }
}
