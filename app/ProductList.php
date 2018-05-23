<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    public function orderedItem()
    {
        return $this->hasMany('testing/app/orderedItem', 'prod_id');
    }
}
