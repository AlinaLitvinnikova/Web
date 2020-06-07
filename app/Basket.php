<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillabel = [
		'product_id','user_id','address','status','phone','description'
		];
}
