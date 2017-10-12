<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conceito extends Model
{
    protected $fillable = [
        'id', 'produto',
    ];
    protected $table = 'produtos';
}
