<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $fillable = [
    	'id'
        'xid',
        'bank_name',
        'value',
        'owner',
        'phone',
        'due_to',
    ];

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'due_to',
    ];

}
