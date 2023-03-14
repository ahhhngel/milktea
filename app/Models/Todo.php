<?php

namespace App\Models;

class Todo{

    public static function all(){
        $product_milktea = [
            [
                'lead'          =>  'kyoTEA',
                'coffee_image'       =>  'assets/img/3463681.png',
                'desc'          =>  'Creamy and Bobalicious'
            ]
        ];
 
        return($product_milktea);
    }

}