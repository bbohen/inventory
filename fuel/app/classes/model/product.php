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

	public static function handle_image($id, $image)
	{
		$product = static::find($id);
		//if($user->avatar == "profile.png")
		//{
		$name = substr(base64_encode(time().microtime()),15,10).".jpg";
		//}
		//else
		//{
			//$name = $user->avatar;
		//}

		$uploads_dir = "assets/img/products";
		$tempfile = $image['product_photo']["tmp_name"];
		$path = "$uploads_dir/$name";
		move_uploaded_file($tempfile, $path);

		$ar = getimagesize($path);
		if($ar['mime'] == 'image/gif'){
			$n = imagecreatefromgif($path);
		}elseif($ar['mime'] == 'image/jpeg'){
			$n = imagecreatefromjpeg($path);
		}elseif($ar['mime'] == 'image/png'){
			$n = imagecreatefrompng($path);
		}
		$orgw = $ar[0];
		$orgh = $ar[1];
		$height = 300;
		$width = 400;

		$cont = imagecreatetruecolor($width, $height);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, $width, $height, $orgw, $orgh);
		imagejpeg($cont, $path, 100);
		imagedestroy($n);
		
		$product->image = $name;
		$product->save();
		return true;
	}
}