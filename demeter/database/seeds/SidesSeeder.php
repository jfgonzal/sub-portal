<?php

use Illuminate\Database\Seeder;

class SidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sides = [
            ['name' => 'turkey', 'display_name' => 'Turkey Chili', 'type' => 'soup', 'description' => '', 'image' => ''],
            ['name' => 'french', 'display_name' => 'French Onion', 'type' => 'soup', 'description' => '', 'image' => ''],
            ['name' => 'broccoli', 'display_name' => 'Broccoli Cheddar', 'type' => 'soup', 'description' => '', 'image' => ''],
            ['name' => 'tomato', 'display_name' => 'Tomato', 'type' => 'soup', 'description' => '', 'image' => ''],
            ['name' => 'chicken', 'display_name' => 'Chicken Noodle', 'type' => 'soup', 'description' => '', 'image' => ''],

            ['name' => 'cheetos', 'display_name' => 'Cheetos', 'type' => 'chip_cookie', 'description' => '', 'image' => ''],
            ['name' => 'fritos', 'display_name' => 'Fritos', 'type' => 'chip_cookie', 'description' => '', 'image' => ''],
            ['name' => 'lays_reg', 'display_name' => 'Lays Regular', 'type' => 'chip_cookie', 'description' => '', 'image' => ''],
            ['name' => 'lays_sour', 'display_name' => 'Lays Sour Cream & Onion', 'type' => 'chip_cookie', 'description' => '', 'image' => ''],
            ['name' => 'lays_bbq', 'display_name' => 'Lays BBQ', 'type' => 'chip_cookie', 'description' => '', 'image' => ''],
            ['name' => 'ruffles_sour', 'display_name' => 'Ruffles Sour Cream and Cheddar', 'type' => 'chip_cookie', 'description' => '', 'image' => ''],
            ['name' => 'cookie_choc', 'display_name' => 'Chocolate Chip', 'type' => 'chip_cookie', 'description' => '', 'image' => ''],
            ['name' => 'cookie_raisin', 'display_name' => 'Raisin', 'type' => 'chip_cookie', 'description' => 'Best choice hands down', 'image' => ''],

            ['name' => 'coke', 'display_name' => 'Coca Cola', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'coke_diet', 'display_name' => 'Coca Cola Diet', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'coke_zero', 'display_name' => 'Coca Cola Zero', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'sweet', 'display_name' => 'Sweet Tea', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'unsweet', 'display_name' => 'Unsweetened Tea', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'mountain', 'display_name' => 'Mountain Dew', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'lemonade', 'display_name' => 'Lemonade', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'water', 'display_name' => 'Water', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'red', 'display_name' => 'Red Bull', 'type' => 'drink', 'description' => '', 'image' => ''],
            ['name' => 'free_red', 'display_name' => 'Sugar Free Red Bull', 'type' => 'drink', 'description' => '', 'image' => '']
        ];

        foreach($sides as $side){
            DB::table('sides')->insert([
                'name' => $side['name'],
                'display_name' => $side['display_name'],
                'type' => $side['type'],
                'description' => $side['description'],
                'image' => $side['image']
            ]);
        }
    }
}
