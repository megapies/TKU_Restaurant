<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    function index($rest_id){
      $foods = Food::getFoods($rest_id);
      return view("food.index", compact("foods"));
    }
}
