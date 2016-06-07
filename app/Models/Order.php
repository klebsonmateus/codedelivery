<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'client_id',
    	'userdeliveryman_id',
    	'total',
    	'status'

    ];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function items()
    {
    	return $this->hasMany(OrderItem::class);
    }

    public function deliveryman()
    {
    	return $this->belongsTo(User::class);
    }
}
