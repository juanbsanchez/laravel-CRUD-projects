<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->times(1)->create([
            "name" => "juan",
            "email" => "juanbsanchez1988@gmail.com",
            "password" => bcrypt("password")
        ]);

        Project::factory()->times(40)->create();
    }
}
