<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'users_id', 'inscurance_price', 'shipping_price','total_price','transaction_status','code'
    ];
}
