<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
     protected $guarded = [];

     protected $fillable = [

        'name', 'detail', 'price'

    ];

    /*

     public function categories(){
         return $this-> hasMany('App\Category');
     }
     */

}
