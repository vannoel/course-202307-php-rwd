<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Carbon\Carbon;

class PicturesTableSeeder extends Seeder
{
    /**
     * Seed the user table.
     *
     * @return vouid
     */
    public function run()
    {
      DB::table('pictures')->insert([
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'solid', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'solid', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'none', 'pattern' => 'blocky', 'hair' => 'none', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'bluegray', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
       
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'white', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'white', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'block', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'white', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'white', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'blocky', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'blocky', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'solid', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'ornage', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'ornage', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'blocky', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'bronw', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'blocky', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'tabby', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'bluegray', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'white', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'bluegray', 'pattern' => 'solid', 'hair' => 'middle', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'black', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'blocky', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'gray', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'blocky', 'hair' => 'long', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'bluegray', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],

        ['uid'=> Str::uuid(), 'color' => 'bluegray', 'pattern' => 'solid', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'beige', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'brown', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
        ['uid'=> Str::uuid(), 'color' => 'orange', 'pattern' => 'tabby', 'hair' => 'short', 'created_at'=> Carbon::now()->toDateTimeString(), 'updated_at'=> Carbon::now()->toDateTimeString()],
      ]);
    }
}
