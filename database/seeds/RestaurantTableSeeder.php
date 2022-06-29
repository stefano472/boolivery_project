<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $restaurants = [
            [
                'name'=>'La Tonnara',
                'address'=>'via Della Casa Comunal, 1',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'17039140742',
                'phone_number'=>'3435554388',
                'cover'=>'/img/restaurants_cover/ita_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'1'
            ],
            [
                'name'=>'Al Vecchio Aratro',
                'address'=>'Via del Comune, 24',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'13253473062',
                'phone_number'=>'3735172698',
                'cover'=>'/img/restaurants_cover/pizza_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'2'
            ],
            [
                'name'=>'Wakfu Gyoza Sushi',
                'address'=>'Via della Posta, 28',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'17669338293',
                'phone_number'=>'3893815496',
                'cover'=>'/img/restaurants_cover/jap_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'3'
            ],
            [
                'name'=>'Chang Restaurant',
                'address'=>'Via del Porticato, 12',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'50887954029',
                'phone_number'=>'3672620965',
                'cover'=>'/img/restaurants_cover/chin_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'4'
            ],
            [
                'name'=>'Bob’s burgers',
                'address'=>'Viale Aldo Moro-Casa comunale, 32',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'50438137958',
                'phone_number'=>'3860032703',
                'cover'=>'/img/restaurants_cover/fast_food_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'5'
            ],
            [
                'name'=>'The Veggie Trough',
                'address'=>'Via del Municipio antico, 2',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'88901077899',
                'phone_number'=>'3990196633',
                'cover'=>'/img/restaurants_cover/vegan_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'6'
            ],
            [
                'name'=>'Sweety house',
                'address'=>'Via Dell\'Accoglienza, 4',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'10744250603',
                'phone_number'=>'3838757164',
                'cover'=>'/img/restaurants_cover/dolci_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'7'
            ],
            [
                'name'=>'Wimpy\'s Thai',
                'address'=>'Via dei Ciliegi, 6',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'18987245084',
                'phone_number'=>'3182611549',
                'cover'=>'/img/restaurants_cover/thai_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'8'
            ],
            [
                'name'=>'Indi Kala Bhaijaan',
                'address'=>'Via Filemon, 8',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'86989836947',
                'phone_number'=>'3154714574',
                'cover'=>'/img/restaurants_cover/hindi_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'9'
            ],
            [
                'name'=>'Peking Keebab',
                'address'=>'Via della Speranza,10',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'81257766838',
                'phone_number'=>'3512946097',
                'cover'=>'/img/restaurants_cover/kebab_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'10'
            ],
            [
                'name'=>'Kapotori Poke',
                'address'=>'Via Mariano Tuccella,16',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'26089747314',
                'phone_number'=>'3112834451',
                'cover'=>'/img/restaurants_cover/poke_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'11'
            ],
            [
                'name'=>'Miki’s street food',
                'address'=>'Via delle Stelle, 14',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'93371919969',
                'phone_number'=>'3903526421',
                'cover'=>'/img/restaurants_cover/street_food_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'12'
            ],
            [
                'name'=>'Tacos El Charrito',
                'address'=>'Via Ferrara, 18',
                'motto'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'tax_id'=>'54196006899',
                'phone_number'=>'3179914690',
                'cover'=>'/img/restaurants_cover/mex_cover.jpg',
                'logo'=>'',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, nesciunt eligendi rem eaque necessitatibus libero, soluta dolor ea quaerat dolorum hic! Totam eligendi perspiciatis eum harum quisquam possimus vitae omnis. Commodi, nam asperiores, a natus modi dolore dicta, nostrum labore veniam sed omnis facilis unde accusantium cumque ipsam dolorum eos praesentium maiores. Accusantium, vero? Perspiciatis ipsum, soluta quam beatae voluptas error esse necessitatibus fuga numquam maiores eos quibusdam dolorem veritatis!',
                'user_id'=>'13'
            ],
        ];

        foreach ($restaurants as $restaurant) {
            $new_restaurant_object = new Restaurant();
            $new_restaurant_object->name = $restaurant['name'];
            $new_restaurant_object->address = $restaurant['address'];
            $new_restaurant_object->motto = $restaurant['motto'];
            $new_restaurant_object->tax_id = $restaurant['tax_id'];
            $new_restaurant_object->phone_number = $restaurant['phone_number'];
            $new_restaurant_object->cover = $restaurant['cover'];
            $new_restaurant_object->description = $restaurant['description'];
            $new_restaurant_object->user_id = $restaurant['user_id'];
            
        
            $new_restaurant_object->save();
        }
    }
}
