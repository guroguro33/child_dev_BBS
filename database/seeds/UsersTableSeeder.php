<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        //１人目
        $user =  new User([
          'id' => 1,
          'name' => 'くろすけ',
          'email' => 't02f447f@gmail.com',
          'password' => bcrypt('11111111'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $user->save();

        //２人目
        $user =  new User([
          'id' => 2,
          'name' => 'しろすけ',
          'email' => 'kaoru1496@yahoo.co.jp',
          'password' => bcrypt('11111111'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        $user->save();
    }
}
