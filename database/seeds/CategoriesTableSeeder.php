<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'category 1',
                'parent_category' => '0',
            ],
            [
                'title' => 'category 2',
                'parent_category' => '0',
            ],
            [
                'title' => 'category 3',
                'parent_category' => '2',
            ],
            [
                'title' => 'category 4',
                'parent_category' => '2',
            ],
            [
                'title' => 'category 5',
                'parent_category' => '2',
            ],
            [
                'title' => 'category 6',
                'parent_category' => '0',
            ],
            [
                'title' => 'category 7',
                'parent_category' => '0',
            ],
            [
                'title' => 'category 8',
                'parent_category' => '7',
            ],
            [
                'title' => 'category 9',
                'parent_category' => '7',
            ],
            [
                'title' => 'category 10',
                'parent_category' => '7',
            ],
            [
                'title' => 'category 11',
                'parent_category' => '7',
            ],

        ]);
    }
}
