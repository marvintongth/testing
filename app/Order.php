<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order()
    {
        return $this->belongsTo('testing/app/User', 'id', 'user_id');
    }

    public function country()
    {
        return $this->hasOne('testing/app/Country', 'country_id', 'id');
    }

    public function promo()
    {
        return $this->hasOne('testing/app/Promo', 'promo_id', 'id');
    }

    public function orderedItem()
    {
        return $this->hasMany('testing/app/OrderedItem', 'order_id', 'id');
    }
}
