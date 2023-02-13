<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Big_question extends Model
{
    protected $fillable = [
        'title', 'deleted_at', 'updated_at'
    ];

    public function scopeShow ($query)
    {
        return $query->where('deleted_at',null);
    }

    // id で検索
    public function scopeSelectById($query, $id){
        return $query->find($id);
    }

    // タイトルを返す
    public function title()
    {
        return $this['title'];
    }

    // idを返す
    public function id()
    {
        return $this['id'];
    }

    // questionsテーブルと結合
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
