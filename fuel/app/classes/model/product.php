<?php

class Model_Product extends \Orm\Model
{
	protected static $_table_name = 'products';

	protected static $_properties = array( 
		'id',
		'created_by',
		'title',
		'product_number',
		'quantity',
		'image'
	);

	public static function get_products()
	{
		//Temporary
		return static::query()->get();
	}

	public static function get_product($id)
	{
		return static::find()->where('id', $id)->get_one();
	}

	public static function add_product($name, $user_id, $product_number, $quantity)
	{
		$project = static::forge(array(
			'created_by' => $user_id,
 			'title' => $name,
 			'product_number' => $product_number,
 			'quantity' => $quantity,
 		));
 		$project->save();
 		return $project;
	}
}