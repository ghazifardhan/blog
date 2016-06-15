<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
	protected $fillable = ['id', 'item_name', 'item_type', 'screen_size', 'ram', 'internal'];
	
	public function item_store()
	{
		return $this->hasMany('App\Item_Store');
	}
}
