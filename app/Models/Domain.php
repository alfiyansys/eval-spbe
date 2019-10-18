<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = 'domains';

    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
