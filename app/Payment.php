<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

	protected $fillable = [
		'amount',
		'customer_id',
		'bill_id',
	];
    
    public function bill()
    {
    	return $this->hasOne('App\Bill');
    }

    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}
