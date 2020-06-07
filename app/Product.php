<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	protected $fillabel = [
		'title','description','status','user_id'
		];
}
