<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'firstname',
        'lastname',
        'address',
        'phone',
    ];
    
    protected $dates = [
    	'created_at',
    	'updated_at',
    ];

    public static $searchable = [
        'firstname',
        'lastname',
        'address',
        'phone',
    ];

    public function bills()
    {
        return $this->hasMany('App\Bill');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function getFullNameAttribute() {
        return $this->firstname . ' ' . $this->lastname;
}

}
