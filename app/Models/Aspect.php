<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspect extends Model
{
    protected $table = 'aspects';

    protected $fillable = [
        'id', 'domain_id', 'name', 'created_at', 'updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function domain() {
        return $this->belongsTo(Domain::class, 'domain_id', 'id');
    }
}
