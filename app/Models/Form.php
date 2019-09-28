<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';

    protected $fillable = [
        'id', 'year', 'name', 'description', 'version', 'start_date', 'end_date', 'domain_weight', 'aspect_weight', 'indicator_weight', 'created_at', 'updated_at'
    ];
}
