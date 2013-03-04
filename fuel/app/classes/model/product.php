<?php

class Model_Product extends \Orm\Model
{
	protected static $_table_name = 'products';

	protected static $_properties = array( 
		'id',
		'title',
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
}