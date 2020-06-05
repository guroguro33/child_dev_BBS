<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //  カラムにロックをかける
    protected $fillable = ['name', 'delete_flg'];

    // リレーション
    // public function tag_map() {
    //   return $this->hasMany('App\TagMap');
    // }

    public function questions()
    {
        return $this->belongsToMany('App\Question', 'tag_map')->withTimestamps();
    }
}
