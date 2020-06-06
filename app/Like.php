<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  //  カラムにロックをかける
  protected $fillable = ['user_id', 'answer_id', 'delete_flg'];

  // リレーション
  public function user() {
    return $this->belongsTo('App\User');
  }

  public function answer() {
    return $this->belongsTo('App\Answer');
  }
}
