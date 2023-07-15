<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Laravel demo user data
        $this->call(UsersTableSeeder::class);

        $this->call(PhotographersTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
    }
}
