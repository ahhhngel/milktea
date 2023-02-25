<?php

namespace App\Models;

class About{

    public static function all(){
        $product_about = [
            [
                'lead'          =>  'About',
                'desc'          =>  'Milk tea is a refreshing flavored iced tea with tapioca balls at the bottom. Milk is mixed with a tea base, fruits, and flavored syrups, and later, the tapioca balls are added.',
                'okay'          =>  'With its delicious and different take on a supposedly typical drink, milk tea became a real hit.'
                ]
        ];

        return($product_about);
    }

}