<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    protected $fillable = [
        'name', 'address', 'motto', 'tax_id', 'phone_number', 'cover', 'logo', 'description'
    ];

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function dishes(){
        return $this->hasMany('App\Dish');
    }

    public function categories(){
        return $this->belongsToMany('App\Category');
    }
}
