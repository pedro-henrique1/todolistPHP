<?php

namespace Database\Seeders;

use Database\Factories\TodoListFactory;
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
        // \App\Models\User::factory(10)->create();
        TodoListFactory::new()->count(10)->create();
    }
}
