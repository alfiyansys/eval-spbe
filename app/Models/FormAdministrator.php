<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormAdministrator extends Model
{
    protected $table = 'form_administrators';

    public $timestamps = false;

    protected $fillable = [
        'id', 'user_id', 'role_id', 'form_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function form() {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }
}
