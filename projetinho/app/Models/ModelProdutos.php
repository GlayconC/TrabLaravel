<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProdutos extends Model
{

    protected $table = 'produtos';
    /*protected $primaryKey = 'codigo';
    //public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $attributes = [
        'descricao' => 'não informado',
        'id_integracao' => 0
    ];
    protected $hidden = [
        'id_integracao',
    ];
    protected $fillable = [
        'id',
        'nome',
        'descricao',
    ];*/
}