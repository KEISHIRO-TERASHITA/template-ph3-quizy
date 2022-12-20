<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Big_question extends Model
{
    // id で検索
    public function scopeSelectById($query, $id){
        return $query->where('id', $id);
    }

    // タイトルを返す
    public function title()
    {
        return $this['title'];
    }

    // questionsテーブルと結合
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
