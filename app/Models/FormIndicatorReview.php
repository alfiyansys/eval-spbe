<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormIndicatorReview extends Model
{
    protected $table = 'form_indicator_reviews';

    protected $fillable = [
        'id', 'indicator_option_id', 'form_id', 'stage_id', 'created_at', 'updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function indicator_option() {
        return $this->belongsTo(IndicatorOption::class, 'indicator_option_id', 'id');
    }

    public function form() {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }

    public function stage() {
        return $this->belongsTo(Stage::class, 'stage_id', 'id');
    }
}
