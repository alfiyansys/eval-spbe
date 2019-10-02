<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormIndicatorOption extends Model
{
    protected $table = 'form_indicator_options';

    public $timestamps = false;

    protected $fillable = [
        'id', 'form_id', 'indicator_option_id', 'indicator_weight', 'aspect_weight', 'domain_weight'
    ];

    public function form() {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }

    public function indicator_option() {
        return $this->belongsTo(IndicatorOption::class, 'indicator_option_id', 'id');
    }
}
