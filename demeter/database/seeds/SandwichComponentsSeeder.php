<?php

use Illuminate\Database\Seeder;

class SandwichComponentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sandwichComponents = [
            ['name' => 'white', 'display_name' => 'White', 'type' => 'bread', 'description' => 'Plain Ol White Bread', 'image' => ''],
            ['name' => 'wheat', 'display_name' => 'Wheat', 'type' => 'bread', 'description' => 'Good Ol Wheat Bread', 'image' => ''],

            ['name' => 'mustard', 'display_name' => 'Mustard', 'type' => 'condiment', 'description' => '', 'image' => ''],
            ['name' => 'miracle', 'display_name' => 'Miracle Whip', 'type' => 'condiment', 'description' => '', 'image' => ''],
            ['name' => 'ketchup', 'display_name' => 'Ketchup', 'type' => 'condiment', 'description' => '', 'image' => ''],
            ['name' => 'pickle', 'display_name' => 'Pickle Sears', 'type' => 'condiment', 'description' => '', 'image' => ''],

            ['name' => 'yellow', 'display_name' => 'Yellow American', 'type' => 'cheese', 'description' => '', 'image' => ''],
            ['name' => 'provolone', 'display_name' => 'Provolone', 'type' => 'cheese', 'description' => '', 'image' => ''],
            ['name' => 'imported', 'display_name' => 'Imported Cheddar', 'type' => 'cheese', 'description' => '', 'image' => ''],
            ['name' => 'jalapeno', 'display_name' => 'Jalapeño Jack', 'type' => 'cheese', 'description' => '', 'image' => ''],
            ['name' => 'swiss', 'display_name' => 'Swiss', 'type' => 'cheese', 'description' => '', 'image' => ''],

            ['name' => 'maple', 'display_name' => 'Maple Glazed Honey Ham', 'type' => 'meat_boar', 'description' => '', 'image' => ''],
            ['name' => 'deluxe', 'display_name' => 'Deluxe Ham', 'type' => 'meat_boar', 'description' => '', 'image' => ''],
            ['name' => 'ovengold', 'display_name' => 'Ovengold Roasted Turkey', 'type' => 'meat_boar', 'description' => '', 'image' => ''],
            ['name' => 'cajun', 'display_name' => 'Cajun Turkey Breast', 'type' => 'meat_boar', 'description' => '', 'image' => ''],
            ['name' => 'buffalo', 'display_name' => 'Buffalo Chicken', 'type' => 'meat_boar', 'description' => '', 'image' => ''],
            ['name' => 'tavern', 'display_name' => 'Tavern Ham', 'type' => 'meat_boar', 'description' => '', 'image' => ''],
            ['name' => 'corned', 'display_name' => 'Corned Beef', 'type' => 'meat_boar', 'description' => '', 'image' => ''],
            ['name' => 'pastrami', 'display_name' => 'Pastrami Beef', 'type' => 'meat_boar', 'description' => '', 'image' => ''],

            ['name' => 'top', 'display_name' => 'Top Round Roast Beef', 'type' => 'meat_pub', 'description' => '', 'image' => ''],
            ['name' => 'bottom', 'display_name' => 'Bottom Round Roast Beef', 'type' => 'meat_pub', 'description' => '', 'image' => ''],
            ['name' => 'beef', 'display_name' => 'Beef Bologna', 'type' => 'meat_pub', 'description' => '', 'image' => ''],
            ['name' => 'genoa', 'display_name' => 'Genoa Salami', 'type' => 'meat_pub', 'description' => '', 'image' => ''],
            ['name' => 'hard', 'display_name' => 'Hard Salami', 'type' => 'meat_pub', 'description' => '', 'image' => '']
        ];

            foreach($sandwichComponents as $sandwichComponent){
                DB::table('sandwich_components')->insert([
                    'name' => $sandwichComponent['name'],
                    'display_name' => $sandwichComponent['display_name'],
                    'type' => $sandwichComponent['type'],
                    'description' => $sandwichComponent['description'],
                    'image' => $sandwichComponent['image']
                ]);
            }
    }
}
