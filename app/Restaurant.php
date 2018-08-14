<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    
  public static function getRestaurants(){
    return [
      [
        "name" => "resturant1"
      ]
    ];
  }
}
