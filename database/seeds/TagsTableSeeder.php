<?php

use App\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        //1つ目
        $tag =  new Tag([
          'id' => 1,
          'name' => 'ADHD',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tag->save();

        //2つ目
        $tag =  new Tag([
          'id' => 2,
          'name' => 'ASD',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tag->save();

        //3つ目
        $tag =  new Tag([
          'id' => 3,
          'name' => 'LD',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tag->save();

        //4つ目
        $tag =  new Tag([
          'id' => 4,
          'name' => '３歳',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tag->save();

        //5つ目
        $tag =  new Tag([
          'id' => 5,
          'name' => '10歳',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $tag->save();
    }
}
