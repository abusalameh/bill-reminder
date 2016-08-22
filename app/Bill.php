<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
    	'id',
        'description',
        'total',
        'remaining',
        'status',
        'due_to',
        'customer_id',
    ];

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'due_to',
    ];

    public function customer(){
    	return $this->belongsTo('App\Customer');
    }

    public function payment()
    {
    	return $this->hasOne('App\Payment');
    }
}
