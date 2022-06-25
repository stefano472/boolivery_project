<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories=[
            [
                'name'=>'Italiano',
                'img'=>'/img/category_img/cat_ita.png'
            ],
            [
                'name'=>'Giapponese',
                'img'=>'/img/category_img/cat_jap.png'
            ],
            [
                'name'=>'Cinese',
                'img'=>'/img/category_img/cat_chi.png'
            ],
            [
                'name'=>'Messicano',
                'img'=>'/img/category_img/cat_mex.png'
            ],
            [
                'name'=>'Fast-food',
                'img'=>'/img/category_img/cat_fast.png'
            ],
            [
                'name'=>'Pizza',
                'img'=>'/img/category_img/cat_piz.png'
            ],
            [
                'name'=>'Vegano',
                'img'=>'/img/category_img/cat_veg.png'
            ],
            [
                'name'=>'Dolci',
                'img'=>'/img/category_img/cat_dol.png'
            ],
            [
                'name'=>'Tailandese',
                'img'=>'/img/category_img/cat_chi.png'
            ],
            [
                'name'=>'Indiano',
                'img'=>'/img/category_img/cat_chi.png'
            ],
            [
                'name'=>'Kebab',
                'img'=>'/img/category_img/cat_chi.png'
            ],
            [
                'name'=>'Poke',
                'img'=>'/img/category_img/cat_chi.png'
            ],
            [
                'name'=>'Street-food',
                'img'=>'/img/category_img/cat_chi.png'
            ]
        ];

        foreach ($categories as $category) {
            $new_category_object = new Category();
            $new_category_object->name = $category['name'];
            $new_category_object->img = $category['img'];
            $new_category_object->save();
        }
    }
}
