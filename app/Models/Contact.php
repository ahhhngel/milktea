<?php

namespace App\Models;

class Contact{

    public static function all(){
        $product_contact = [
            [
                'lead'          =>  'Products',
                'coffee_image'  =>  'assets/img/milk.jpg',
            ]
        ];

        return($product_contact);
    }

}