<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    public function order()
    {
        return $this->hasOne('testing/app/Order', 'order_id', 'id');
    }

    public function product()
    {
        return $this->hasOne('testing/app/Product', 'prod__id', 'id');
    }
}
