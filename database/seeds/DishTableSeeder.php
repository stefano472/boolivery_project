<?php

use Illuminate\Database\Seeder;
use App\Dish;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dishes=[
            [
                'name'=>'spaghetti allo scoglio',
                'description'=>'spaghetti n.5, conditi con cozze, vongole e gamberi e altri frutti di mare',
                'price'=>'9.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'1',
            ],
            [
                'name'=>'lasagne al forno',
                'description'=>'pasta fresca cotta al forno con ragù di manzo e besciamella',
                'price'=>'8.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'1',
            ],
            [
                'name'=>'cotoletta alla milanese',
                'description'=>'cotoletta di vitello impanata e soffritta in padella',
                'price'=>'6.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'1',
            ],
            [
                'name'=>'saltimbocca alla romana',
                'description'=>'fettine di vitello con prosciutto cotto e mozzarella, cotte in padella',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'1',
            ],
            [
                'name'=>'cannolo',
                'description'=>'tipico dolce siciliano con ricotta dolce e chicchi di cioccolato',
                'price'=>'4.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'1',
            ],
            [
                'name'=>'pizza margherita',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'2',
            ],
            [
                'name'=>'pizza diavola',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'2',
            ],
            [
                'name'=>'pizza capricciosa',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'2',
            ],
            [
                'name'=>'pizza quattro formaggi',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'2',
            ],
            [
                'name'=>'pizza marinara',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'4.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'2',
            ],
            [
                'name'=>'sushi e sashimi misto',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'12.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'3',
            ],
            [
                'name'=>'zuppa di miso',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'10.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'3',
            ],
            [
                'name'=>'ramen',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'11.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'3',
            ],
            [
                'name'=>'takoyaki',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'10.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'3',
            ],
            [
                'name'=>'gyoza',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'9.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'3',
            ],
            [
                'name'=>'riso alla cantonese',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'4',
            ],
            [
                'name'=>'pollo alle mandorle',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'4',
            ],
            [
                'name'=>'involtini primavera',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'4',
            ],
            [
                'name'=>'noodle di riso con verdure',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'4',
            ],
            [
                'name'=>'biscotti della fortuna',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'1.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'4',
            ],
            [
                'name'=>'hamburger classico',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'5',
            ],
            [
                'name'=>'cheeseburger',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'5',
            ],
            [
                'name'=>'chicken burger',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'5',
            ],
            [
                'name'=>'crocchette di pollo',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'5',
            ],
            [
                'name'=>'fish burger',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'5',
            ],
            [
                'name'=>'hamburger di soia',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'6',
            ],
            [
                'name'=>'seitan scottato',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'6',
            ],
            [
                'name'=>'insaltona estiva',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'6',
            ],
            [
                'name'=>'tofu alle erbe',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'6',
            ],
            [
                'name'=>'hummus di ceci',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'6',
            ],
            [
                'name'=>'red velvet',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'7',
            ],
            [
                'name'=>'sacher',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'7',
            ],
            [
                'name'=>'cassata',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'4.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'7',
            ],
            [
                'name'=>'bignè alla crema',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'4.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'7',
            ],
            [
                'name'=>'tiramisù',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'7',
            ],
            [
                'name'=>'pad thai',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'8',
            ],
            [
                'name'=>'khao pad',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'8',
            ],
            [
                'name'=>'tom yun goong',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'8.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'8',
            ],
            [
                'name'=>'yam nu',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'8',
            ],
            [
                'name'=>'por pia tord',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'8',
            ],
            [
                'name'=>'samosa',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'8.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'9',
            ],
            [
                'name'=>'pakora',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'9',
            ],
            [
                'name'=>'naan',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'8.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'9',
            ],
            [
                'name'=>'biryani',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'9',
            ],
            [
                'name'=>'pollo tandori',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'9.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'9',
            ],
            [
                'name'=>'kebab con agnello',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'8.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'10',
            ],
            [
                'name'=>'kebab mix',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'10',
            ],
            [
                'name'=>'falafel',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'8.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'10',
            ],
            [
                'name'=>'shish taouk',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'10',
            ],
            [
                'name'=>'kebab di pollo',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'9.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'10',
            ],
            [
                'name'=>'pokè salmone',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'8.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'11',
            ],
            [
                'name'=>'pokè tonno',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'11',
            ],
            [
                'name'=>'pokè pollo',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'8.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'11',
            ],
            [
                'name'=>'pokè vegan',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'11',
            ],
            [
                'name'=>'pokè vegetariano',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'9.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'11',
            ],
            [
                'name'=>'pane con la milza',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'12',
            ],
            [
                'name'=>'pane con panelle',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'12',
            ],
            [
                'name'=>'arancina',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'4.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'12',
            ],
            [
                'name'=>'pane e salamina',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'12',
            ],
            [
                'name'=>'iris al forno',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.50',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'12',
            ],
            [
                'name'=>'tacos di carne',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'7.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'13',
            ],
            [
                'name'=>'tacos vegetariani',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'6.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'13',
            ],
            [
                'name'=>'empanadas al formaggio',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'5.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'13',
            ],
            [
                'name'=>'nachos con salsa piccante',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'4.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'13',
            ],
            [
                'name'=>'fajitas',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel ex blanditiis reiciendis ratione?',
                'price'=>'9.00',
                'cover'=>'/img/img_rest/bowl-color-dish-1162540.jpeg',
                'restaurant_id'=>'13',
            ],

        ];

        foreach ($dishes as $dish) {
            $new_dish_object = new Dish();
            $new_dish_object->name = $dish['name'];
            $new_dish_object->description = $dish['description'];
            $new_dish_object->price = $dish['price'];
            $new_dish_object->cover = $dish['cover'];
            $new_dish_object->restaurant_id = $dish['restaurant_id'];
        
            $new_dish_object->save();
        }
    }
}

