<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Category;
use DB;

class CategoriesTopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        Topic::truncate();
        Category::truncate();
        DB::statement("SET foreign_key_checks = 1");

        Category::factory(5)->create()->each(function ($c) {
            $c->topics()->saveMany(
                Topic::factory(5)->create([
                    'category_id' => $c->id
                ])
            );
        });
    }
}
