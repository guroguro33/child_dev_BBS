<?php

use App\Answer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->delete();
        //1つめ
        $answer =  new Answer([
          'id' => 1,
          'question_id' => 1,
          'user_id' => 2,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();

        //2つめ
        $answer =  new Answer([
          'id' => 2,
          'question_id' => 1,
          'user_id' => 2,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();

        //3つめ
        $answer =  new Answer([
          'id' => 3,
          'question_id' => 2,
          'user_id' => 2,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();

        //4つめ
        $answer =  new Answer([
          'id' => 4,
          'question_id' => 2,
          'user_id' => 2,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();

        //5つめ
        $answer =  new Answer([
          'id' => 5,
          'question_id' => 3,
          'user_id' => 1,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();

        //6つめ
        $answer =  new Answer([
          'id' => 6,
          'question_id' => 3,
          'user_id' => 1,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();

        //7つめ
        $answer =  new Answer([
          'id' => 7,
          'question_id' => 4,
          'user_id' => 1,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();

        //8つめ
        $answer =  new Answer([
          'id' => 8,
          'question_id' => 4,
          'user_id' => 1,
          'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト\nテキストテキストテキストテキストテキスト',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $answer->save();
    }
}
