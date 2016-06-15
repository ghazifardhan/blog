<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Store extends Model
{
    protected $table = 'item_store';
	protected $fillable = ['item_id', 'item_name', 'serial_number'];
	
	public function item()
	{
		return $this->belongsTo('App\Item');
	}
}
