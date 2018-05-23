<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function order()
    {
    	return $this->hasOne('testing/app/Order');
    }
}
