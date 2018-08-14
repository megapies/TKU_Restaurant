<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    
  public static function getRestaurants(){
    return [
      [
        "id" => 1,
        "name" => "ร้านโลมา"
      ],
      [
        "id" => 2,
        "name" => "restaurant 2"
      ],
      [
        "id" => 3,
        "name" => "restaurant 3"
      ],
      [
        "id" => 4,
        "name" => "restaurant 4"
      ]
    ];
  }
}
