<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function order()
    {
    	return $this->hasOne('testing/app/Order');
    }
}
