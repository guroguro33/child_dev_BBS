<?php

use App\Question;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();
        //1つめ
        $question =  new Question([
          'id' => 1,
          'user_id' => 1,
          'title' => 'タイトルタイトル',
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $question->save();

        //2つめ
        $question =  new Question([
          'id' => 2,
          'user_id' => 1,
          'title' => 'タイトルタイトルタイトル',
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $question->save();

        //3つめ
        $question =  new Question([
          'id' => 3,
          'user_id' => 2,
          'title' => 'タイトルタイトルタイトルテキストテキスト',
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $question->save();

        //4つめ
        $question =  new Question([
          'id' => 4,
          'user_id' => 2,
          'title' => 'タイトルタイトルタイトルテキストテキストテキストテキストテキスト',
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $question->save();
    }
}
