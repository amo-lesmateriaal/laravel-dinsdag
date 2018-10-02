<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public static function lowQty() {
        return self::where('quantity', '<', 2)->get();
    }

}
