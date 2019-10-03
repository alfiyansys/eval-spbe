<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormIndicatorReviewFile extends Model
{
    protected $table = 'form_indicator_review_files';

    protected $fillable = [
        'id', 'form_indicator_review_id', 'filename', 'extension', 'created_at', 'updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function form_indicator_review() {
        return $this->belongsTo(FormIndicatorReview::class, 'form_indicator_review_id', 'id');
    }
}
