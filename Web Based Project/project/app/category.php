<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable=['id', 'FoodCategory'];
    public function food(){
        return $this->hasMany('App\food');
    }
}
