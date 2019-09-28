<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndicatorFile extends Model
{
    protected $table = 'indicator_files';

    protected $fillable = [
        'id', 'review_history_id', 'filename', 'extension', 'created_at', 'updated_at'
    ];

    public function review_history() {
        return $this->belongsTo(ReviewHistory::class, 'review_history_id', 'id');
    }
}
