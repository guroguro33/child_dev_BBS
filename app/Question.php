<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //  カラムにロックをかける
    protected $fillable = ['title', 'detail','delete_flg']; 

    // リレーション
    public function user() {
      return $this->belongsTo('App\User', 'user_id');
    } 

    public function tags() {
        return $this->belongsToMany('App\Tag', 'tag_map')->withTimestamps();
    }

    public function answers() {
        return $this->hasMany('App\Answer');
    }

}
