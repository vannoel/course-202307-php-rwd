<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Carbon\Carbon;

class PhotographersTableSeeder extends Seeder
{
    /**
     * Seed the user table.
     *
     * @return void
     */
    public function run()
    {
      DB::table('photographers')->insert([
        // Male
        ['uid'=> Str::uuid(), 'name' => 'Jesse Horton', 'email' => 'jesse_horton@gmail.com', 'gender' => 'male', 'age' => 31, 'country' => 'GB', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Jack Skinner', 'email' => 'jack_skinner@gmail.com', 'gender' => 'male', 'age' => 32, 'country' => 'US', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Alexander Snyder', 'email' => 'alexander_snyder@gmail.com', 'gender' => 'male', 'age' => 29, 'country' => 'PE', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Matthew Robinett', 'email' => 'matthew_robinett@gmail.com', 'gender' => 'male', 'age' => 27, 'country' => 'ES', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Thomas George', 'email' => 'thomas_george@gmail.com', 'gender' => 'male', 'age' => 35, 'country' => 'NL', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Ken Dennis', 'email' => 'ken_dennis@gmail.com', 'gender' => 'male', 'age' => 39, 'country' => 'US', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Martin Holland', 'email' => 'martin_holland@gmail.com', 'gender' => 'male', 'age' => 42, 'country' => 'US', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Clive Frost', 'email' => 'clive_frost@gmail.com', 'gender' => 'male', 'age' => 48, 'country' => 'GB', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        // Female
        ['uid'=> Str::uuid(), 'name' => 'Zea Waters', 'email' => 'zea_waters@gmail.com', 'gender' => 'female', 'age' => 26, 'country' => 'NO', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Elena Harrett', 'email' => 'elena_harrett@gmail.com', 'gender' => 'female', 'age' => 29, 'country' => 'SY', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Kelsey Shaw', 'email' => 'kelsey_shaw@gmail.com', 'female' => 'male', 'age' => 27, 'country' => 'UA', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Louise Wong', 'email' => 'louise_wong@gmail.com', 'female' => 'male', 'age' => 26, 'country' => 'TW', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Judy Sarratt', 'email' => 'judy_sarratt@gmail.com', 'gender' => 'female', 'age' => 25, 'country' => 'NO', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Jasmine Greer', 'email' => 'jasmine_greer@gmail.com', 'gender' => 'female', 'age' => 27, 'country' => 'PY', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Kay Glover', 'email' => 'kay_glover@gmail.com', 'gender' => 'female', 'age' => 28, 'country' => 'ES', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Lizzie Nichols', 'email' => 'lizzie_nichols@gmail.com', 'gender' => 'female', 'age' => 24, 'country' => 'NO', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Nina Austin', 'email' => 'nina_austin@gmail.com', 'gender' => 'female', 'age' => 25, 'country' => 'ZA', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Robin Goodwin', 'email' => 'robin_goodwin@gmail.com', 'gender' => 'female', 'age' => 51, 'country' => 'GB', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Lulu Liu', 'email' => 'lulu_liu@gmail.com', 'gender' => 'female', 'age' => 31, 'country' => 'TW', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Zoe Duncan', 'email' => 'zoe_duncan@gmail.com', 'gender' => 'female', 'age' => 34, 'country' => 'GB', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'name' => 'Yvette Marrow', 'email' => 'yvette_marrow@gmail.com', 'gender' => 'female', 'age' => 28, 'country' => 'JP', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
      ]);
    }
}
