<?php

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
        factory(\App\Department::class, 7)->create();
        factory(\App\Employer::class, 100)->create();
    }
}
