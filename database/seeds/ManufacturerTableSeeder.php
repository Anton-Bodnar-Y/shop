<?php

use Illuminate\Database\Seeder;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturer')->insert([
            [
                'title' => 'Acer',
                'img' => 'brand-acer.jpg',
            ],
            [
                'title' => 'Dell',
                'img' => 'brand-dell.jpg',
            ],
            [
                'title' => 'Lenovo',
                'img' => 'brand-lenovo.jpg',
            ],
            [
                'title' => 'Asus',
                'img' => 'brand-asus.jpg',
            ],
            [
                'title' => 'Artline',
                'img' => 'brand-artline.jpg',
            ],
            [
                'title' => 'HP',
                'img' => 'brand-hp.jpg',
            ],
            [
                'title' => 'Samsung',
                'img' => 'brand-samsung.jpg',
            ],
            [
                'title' => 'Motorola',
                'img' => 'brand-motorola.jpg',
            ],
            [
                'title' => 'Sony',
                'img' => 'brand-sony.jpg',
            ],
            [
                'title' => 'Xiaomi',
                'img' => 'brand-xiaomi.jpg',
            ],
        ]);
    }
}
