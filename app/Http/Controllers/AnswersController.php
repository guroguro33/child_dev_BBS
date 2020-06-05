<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswersController extends Controller
{
    public function store(Request $request, $id) {

      // バリデーション
      $request->validate([
        'answer' => 'required|string|max:1000'
      ]);

      $answer = new Answer;

      $answer->user_id = Auth::user()->id;
      $answer->detail = $request->answer;
      $answer->question_id = $id;
      $answer->save();
      
      // リダイレクトする
      // その時にsessionフラッシュにメッセージを入れる
      return redirect()->route('questions.show', ['id' => $id])->with('flash_message', __('Registered'));
    }

    public function delete($id) {

      // 質問IDを取得
      $question_id = Auth::user()->answers()->find($id)->question_id;
      // 回答を削除
      Auth::user()->answers()->find($id)->delete();

      // リダイレクトする
      // その時にsessionフラッシュにメッセージを入れる
      return redirect()->route('questions.show', ['id' => $question_id])->with('flash_message', __('Deleted.'));

    }
}
