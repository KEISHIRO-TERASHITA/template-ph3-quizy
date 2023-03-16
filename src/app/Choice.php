<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    //
    protected $fillable = [
        'question_id', 'choice', 'updated_at',
    ];
    public function choice()
    {
        return $this['choice'];
    }
    public function value()
    {
        return $this['value'];
    }
}
