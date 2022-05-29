<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCidade extends Model
{

    protected $table = 'cidade';

    protected $guarded = [];
    
    public $timestamps = false;
   
}