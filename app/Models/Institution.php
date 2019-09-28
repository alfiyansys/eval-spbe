<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institutions';

    protected $fillable = [
        'id', 'institution_category_id', 'code', 'name', 'acronym', 'questionnaire_target', 'created_at', 'updated_at'
    ];

    public function institution_category() {
        return $this->belongsTo(InstitutionCategory::class, 'institution_category_id', 'id');
    }
}
