<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::factory()->create(['name' => 'Tran Cam Hoa', 'email' => 'hoact.it@gmail.com']);
        $this->call(CategoriesTopicsSeeder::class);
    }
}
