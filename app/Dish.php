<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //
    protected $table = 'dishes';

    protected $fillable = [
        'name', 'description', 'price', 'available', 'img',
    ];

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }

    public function orders(){
        return $this->belongsToMany('App\Order');
    }
//     public function orders(){
//         return $this->belongsToMany('App\Order', 'dish_order','dish_id','order_id');
//         // ->withPivot("quantity");
//     }
}
