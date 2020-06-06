<?php

use App\TagMap;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagMapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_map')->delete();
        // 1つ目
        $tagMap =  new TagMap([
          'question_id' => 1,
          'tag_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tagMap->save();

        // 2つ目
        $tagMap =  new TagMap([
          'question_id' => 1,
          'tag_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tagMap->save();

        // 3つ目
        $tagMap =  new TagMap([
          'question_id' => 2,
          'tag_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tagMap->save();

        // 4つ目
        $tagMap =  new TagMap([
          'question_id' => 2,
          'tag_id' => 5,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tagMap->save();

        // 5つ目
        $tagMap =  new TagMap([
          'question_id' => 3,
          'tag_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tagMap->save();

        // 6つ目
        $tagMap =  new TagMap([
          'question_id' => 3,
          'tag_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tagMap->save();

        // 7つ目
        $tagMap =  new TagMap([
          'question_id' => 4,
          'tag_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tagMap->save();
    }
}
