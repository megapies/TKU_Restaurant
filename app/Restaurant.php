<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    
  public static function getRestaurants(){
    return [
      [
        "id" => 1,
        "name" => "ร้านโลมา",
        "image" => "1.jpg",
        "min_price" => 45,
        "max_price" => 100,
      ],
    ];
  }
}
