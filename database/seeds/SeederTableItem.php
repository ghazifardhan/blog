<?php

use Illuminate\Database\Seeder;

class SeederTableItem extends Seeder{
	public function run()
{
	// Buat data berupa array
	$item = array(
	array(
		'item_name' => 'Xiaomi Redmi Note 3', 
		'item_type' => 'Handphone',
		'screen_size' => '5.5 Inch',
		'ram' => '2 GB',
		'internal' => '16 GB'
	));
	
	// Masukkan data ke database
	DB::table('item')->insert($item);
}
}