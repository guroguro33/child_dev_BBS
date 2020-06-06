<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  //  カラムにロックをかける
  protected $fillable = ['question_id', 'user_id', 'detail', 'delete_flg']; 

  // リレーション
  public function question() {
    return $this->belongsTo('App\Question', 'question_id');
  } 
  
  public function user() {
    return $this->belongsTo('App\User', 'user_id');
  } 

  public function likes() {
    return $this->hasMany('App\Like');
  }
}
