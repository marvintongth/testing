<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('testing/app/User', 'user_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo('testing/app/Country', 'country', 'id');
    }

    public function promo()
    {
        return $this->belongsTo('testing/app/Promo', 'promo_id', 'id');
    }

    public function orderedItem()
    {
        return $this->hasMany('testing/app/OrderedItem', 'ordered_id', 'id');
    }
}
