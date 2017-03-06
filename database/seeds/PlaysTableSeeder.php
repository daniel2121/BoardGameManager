<?php

use Illuminate\Database\Seeder;

class PlaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('plays')->insert(['user_id' => 1, 'bgame_id' => 1, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 2, 'bgame_id' => 2, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 3, 'bgame_id' => 3, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 4, 'bgame_id' => 4, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 5, 'bgame_id' => 5, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 6, 'bgame_id' => 6, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 7, 'bgame_id' => 7, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 8, 'bgame_id' => 8, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 9, 'bgame_id' => 9, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 1, 'bgame_id' => 10, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 2, 'bgame_id' => 11, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 3, 'bgame_id' => 12, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 4, 'bgame_id' => 13, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 5, 'bgame_id' => 14, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 6, 'bgame_id' => 15, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 7, 'bgame_id' => 16, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 8, 'bgame_id' => 17, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 9, 'bgame_id' => 18, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 1, 'bgame_id' => 19, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 2, 'bgame_id' => 20, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 3, 'bgame_id' => 21, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 4, 'bgame_id' => 22, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 5, 'bgame_id' => 23, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 6, 'bgame_id' => 24, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 7, 'bgame_id' => 25, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 8, 'bgame_id' => 26, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 9, 'bgame_id' => 27, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 1, 'bgame_id' => 29, 'date' => date('Y-m-d')]);
        DB::table('plays')->insert(['user_id' => 2, 'bgame_id' => 30, 'date' => date('Y-m-d')]);
    }
}
