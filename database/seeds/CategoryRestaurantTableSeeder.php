<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class CategoryRestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = [
            [null],
            [1],
            [1,6],
            [2],
            [3],
            [5],
            [7],
            [8],
            [9],
            [10],
            [11],
            [12],
            [13],
            [4]
        ];

        for($i = 1; $i < 14; $i++){
            $restaurant = Restaurant::find($i);
            $restaurant->categories()->sync($category[$i]);

            $restaurant->save();
        }
    }
}
