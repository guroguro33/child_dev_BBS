<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagMap extends Model
{
    // テーブル名がモデル名の複数形ではないので設定
    protected $table = 'tag_map';

    //  カラムにロックをかける
    protected $fillable = ['question_id', 'tag_id','delete_flg'];

    // リレーション
    // public function tag() {
    //   return $this->belongsTo('App\Tag', 'tag_id');
    // }

    // public function question()
    // {
    //   return $this->belongsTo('App\Question', 'question_id');
    // }
}
