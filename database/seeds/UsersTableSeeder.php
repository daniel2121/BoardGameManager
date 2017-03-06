<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => 'Maile Nolting']);
        DB::table('users')->insert(['name' => 'Mckenzie Gano']);
        DB::table('users')->insert(['name' => 'Lou Oswalt']);
        DB::table('users')->insert(['name' => 'Adrienne Sikes']);
        DB::table('users')->insert(['name' => 'Arie Corley']);
        DB::table('users')->insert(['name' => 'Tressie Inks']);
        DB::table('users')->insert(['name' => 'Nickole Bukowski']);
        DB::table('users')->insert(['name' => 'Lacey Cumbee']);
        DB::table('users')->insert(['name' => 'Faith Troxler']);
        DB::table('users')->insert(['name' => 'Chere Campas']);
        DB::table('users')->insert(['name' => 'Lu Lesage']);
        DB::table('users')->insert(['name' => 'Courtney Koester']);
        DB::table('users')->insert(['name' => 'Lanell Broussard']);
        DB::table('users')->insert(['name' => 'Silvia Ballweg']);
        DB::table('users')->insert(['name' => 'Barrett Wesson']);
        DB::table('users')->insert(['name' => 'Margery Geiger']);
        DB::table('users')->insert(['name' => 'Vita Gerken']);
        DB::table('users')->insert(['name' => 'Abram Lazar']);
        DB::table('users')->insert(['name' => 'Dorothy Bisbee']);
        DB::table('users')->insert(['name' => 'Rusty Squier']);
        DB::table('users')->insert(['name' => 'Inocencia Mckee']);
        DB::table('users')->insert(['name' => 'Cinthia Manno']);
        DB::table('users')->insert(['name' => 'Felicidad Hauptman']);
        DB::table('users')->insert(['name' => 'Margarett Parshall']);
        DB::table('users')->insert(['name' => 'Nona Dyke']);
        DB::table('users')->insert(['name' => 'Jeffery Ecklund']);
        DB::table('users')->insert(['name' => 'Berta Batson']);
        DB::table('users')->insert(['name' => 'Robbi Selle']);
        DB::table('users')->insert(['name' => 'Tyesha Newhard']);
        DB::table('users')->insert(['name' => 'Angelo Ellsworth']);
    }
}
