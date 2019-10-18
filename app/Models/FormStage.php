<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormStage extends Model
{
    protected $table = 'form_stage';

    protected $fillable = [
        'id', 'form_id', 'stage_id', 'confirmed'
    ];

    public function form() {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }

    public function stage() {
        return $this->belongsTo(Stage::class, 'stage_id', 'id');
    }
}
