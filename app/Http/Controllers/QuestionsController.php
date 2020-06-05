<?php

namespace App\Http\Controllers;

use App\Tag;
use App\User;
use App\TagMap;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\QuestionRequest;

class QuestionsController extends Controller
{
    public function index() {

      $questions = Question::with([
        'tags'
      ])->get();
      
      // dd($questions->toArray());

      return view('questions.index', compact('questions'));
    }
    
    public function show($id) {

      if(!ctype_digit($id)){
        return redirect('/')->with('flash_message', __('Invalid operation was performed.'));
      }

      // 質問とタグを取得
      $question = Question::find($id);
      $user = $question->user;
      $tags = $question->tags;


      // dd($question->toArray());

      return view('questions.show', compact('question', 'user', 'tags'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(QuestionRequest $request)
    // QuestionRequestでフォームリクエストが実行され、バリデーションが行われる
    {
        // モデルを使って、DBに登録する値をセット
        $question = new Question;
        $tag = new Tag;
        $tag_map = new TagMap;

        // user_idも含めてDBへ登録
        Auth::user()->questions()->save($question->fill($request->all()));
        
        // tagsテーブルの処理
        $tags = [];
        $i = 1;
        $tag_name = 'tag'.$i; 

        while(!empty($request->$tag_name)){
          $tags[] = ['name' => $request->$tag_name];
          $i++;
          $tag_name = 'tag'.$i;
        }

        // createManyで複数のproblemに登録
        $question->tags()->createMany($tags);


        // リダイレクトする
        // sessionフラッシュにメッセージ格納
        return redirect('/mypage')->with('flash_message', __('Registered'));
    }

    public function edit($id) {
      
      $question = Question::find($id);
      $tags = $question->tags;

      return view('questions.edit', compact('question','tags'));
    }

    public function update($id) {
      
      $question = Question::find($id);

      // リダイレクトする
      // sessionフラッシュにメッセージ格納
      return redirect('/mypage')->with('flash_message', __('Registered'));
      
    }

    public function delete($id) {
      
      $question = Question::find($id);

      // リダイレクトする
      // sessionフラッシュにメッセージ格納
      return redirect('/mypage')->with('flash_message', __('Deleted.'));
      
    }

    public function mypage()
    {
      // $questions = Auth::user()->questions()->get();
    //  dd($questions);
      
      // $user_id = Auth::user()->id;
      // $questions = Question::where('user_id', $user_id)->tags;

      // withメソッドでクエリ回数を減らせる
      $user = Auth::user()->with([
        'questions' => function($query) {
          $query->orderBy('created_at','desc');
        },
        // ネストしたメソッド
        'questions.tags'
      ])->get()->first();
 
      // dd($user->questions);
      
      return view('questions.mypage', compact('user'));
    }

}
