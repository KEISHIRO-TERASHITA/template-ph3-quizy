<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'big_question_id', 'image', 'order', 'default'
    ];

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
    public function img()
    {
        return $this['image'];
    }

    public function scopeShow($query)
    {
        return $query->where('deleted_at',null)->orderBy('order', 'asc');
    }
}
