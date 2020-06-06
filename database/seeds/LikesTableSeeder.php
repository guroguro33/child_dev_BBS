<?php

use App\Like;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->delete();
        //1つめ
        $like =  new Like([
          'answer_id' => 1,
          'user_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();

        //2つめ
        $like =  new Like([
          'answer_id' => 1,
          'user_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();

        //3つめ
        $like =  new Like([
          'answer_id' => 2,
          'user_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();

        //4つめ
        $like =  new Like([
          'answer_id' => 4,
          'user_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();

        //5つめ
        $like =  new Like([
          'answer_id' => 5,
          'user_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();

        //6つめ
        $like =  new Like([
          'answer_id' => 6,
          'user_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();

        //7つめ
        $like =  new Like([
          'answer_id' => 7,
          'user_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();

        //8つめ
        $like =  new Like([
          'answer_id' => 7,
          'user_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $like->save();
    }
}
