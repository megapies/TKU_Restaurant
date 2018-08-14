<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public static function getFoods($restId){
      $foods = [
        "1" => [
          [
            "id" => 101,
            "name_ch" => "醃炸豚排",
            "name_th" => "ข้าวหน้าปลาโลมาทอด",
            "price" => 85,
            "image" => "1-1.jpg",
            "name_image" => ""
          ],
          [
            "id" => 102,
            "name_ch" => "炸雞柳",
            "name_th" => "ข้าวหน้าไก่ทอด",
            "price" => 75,
            "image" => "1-2.jpg",
            "name_image" => "",
          ],
          [
            "id" => 103,
            "name_ch" => "月見烏龍麵",
            "name_th" => "อุด้ง(เล็ก)",
            "price" => 75,
            "image" => "1-3.jpg",
            "name_image" => "",
          ],
          [
            "id" => 104,
            "name_ch" => "咖哩炸雞排",
            "name_th" => "ข้าวแกงกระหรี่ไก่ทอด",
            "price" => 90,
            "image" => "1-4.jpg",
            "name_image" => "",
          ],
          [
            "id" => 105,
            "name_ch" => "照燒豬排",
            "name_th" => "ข้าวหมูเทอริยากิ",
            "price" => 85,
            "image" => "1-5.jpg",
            "name_image" => "",
          ]
        ]
      ];
      return $foods[$restId];
    }
}
