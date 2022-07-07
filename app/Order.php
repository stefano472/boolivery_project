<?php

namespace App;

use App\Dish;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'total', 
        'customer_address', 
        'customer_name', 
        'customer_surname', 
        'customer_phone', 
        'special_request', 
        'payment_approval', 
        'restaurant_id',
        'customer_email', 
    ];

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }

    // public function dishes(){
    //     return $this->belongsToMany('App\Dish');
    // }
    public function dishes(){
        return $this->belongsToMany('App\Dish')->withPivot("quantity");
    }
}
