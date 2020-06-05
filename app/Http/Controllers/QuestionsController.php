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

      // GETパラメータが数字かチェック
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
        $tag_ids = [];

        for($i = 1; $i <= 2; $i++){
          $tag_name = 'tag'.$i; 
          if(!empty($request->$tag_name)){
            // DBにデータが存在する場合は取得し、存在しない場合はDBにデータを登録した上でインスタンスを取得する
            $tag = Tag::firstOrCreate([
              'name' => $request->$tag_name
            ]);
            $tag_ids[] = $tag->id;
          }
        }

        // 中間テーブルに登録
        $question->tags()->detach();
        $question->tags()->attach($tag_ids);


        // リダイレクトする
        // sessionフラッシュにメッセージ格納
        return redirect('/mypage')->with('flash_message', __('Registered'));
    }

    public function edit($id) {
      
      $question = Question::find($id);
      $tags = $question->tags;

      return view('questions.edit', compact('question','tags'));
    }

    public function update(QuestionRequest $request, $id) {
      // GETパラメータが数字かチェック
      if(!ctype_digit($id)){
        return redirect('/')->with('flash_message', __('Invalid operation was performed.'));
      }
      
      // questionsテーブルの更新
      $question = Question::find($id);
      $question->fill($request->all())->save();

      // tagsテーブルの処理
        $tag_ids = [];

        for($i = 1; $i <= 2; $i++){
          $tag_name = 'tag'.$i; 
          if(!empty($request->$tag_name)){
            // DBにデータが存在する場合は取得し、存在しない場合はDBにデータを登録した上でインスタンスを取得する
            $tag = Tag::firstOrCreate([
              'name' => $request->$tag_name
            ]);
            $tag_ids[] = $tag->id;
          }
        }

        // 中間テーブルに登録（detachで一度全部のタグとの関連付けをクリアする）
        $question->tags()->detach();
        $question->tags()->attach($tag_ids);

      // リダイレクトする
      // sessionフラッシュにメッセージ格納
      return redirect('/mypage')->with('flash_message', __('Registered'));
      
    }

    public function delete($id) {
      
      $question = Question::find($id);
      $question->delete();

      // リダイレクトする
      // sessionフラッシュにメッセージ格納
      return redirect('/mypage')->with('flash_message', __('Deleted.'));
      
    }

    public function mypage() {

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
