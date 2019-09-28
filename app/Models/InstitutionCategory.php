<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitutionCategory extends Model
{
    protected $table = 'institution_categories';

    public $timestamps = false;

    protected $fillable = [
        'id', 'title'
    ];
}
