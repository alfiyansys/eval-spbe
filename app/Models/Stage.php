<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $table = 'stages';

    public $timestamps = false;

    protected $fillable = [
        'id', 'name'
    ];
}
