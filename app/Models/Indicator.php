<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $table = 'indicators';

    protected $fillable = [
        'id', 'aspect_id', 'name', 'question', 'created_at', 'updated_at'
    ];

    public function aspect() {
        return $this->belongsTo(Aspect::class, 'aspect_id', 'id');
    }
}
