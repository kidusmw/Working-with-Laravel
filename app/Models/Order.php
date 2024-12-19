<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['order_id', 'order_item', 'order_by', 'order_qty'];
}
