<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndicatorOption extends Model
{
    protected $table = 'indicator_options';

    protected $fillable = [
        'id', 'indicator_id', 'title', 'level', 'created_at', 'updated_at'
    ];

    public function indicator() {
        return $this->belongsTo(Indicator::class, 'indicator_id', 'id');
    }
}
