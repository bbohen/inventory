<?php

class Controller_Products extends Controller_APP
{
	public function action_distributor_list()
	{
		$this->template->title = 'Distributor List';

		if($this->logged_in()){
			$this->template->content = View::forge('users/dataview', array(
				'products' => Model_Product::get_products(),
				'account' => $this->account,
			));
		}else{
			throw new Exception("You Need To Be Logged In", 1);
		}

	}

	public function action_create()
	{
		$this->template->title = 'Create New Product';

		if($this->logged_in()){
			$this->template->content = View::forge('users/productcreate', array(
				'products' => Model_Product::get_products(),
				'account' => $this->account,
			));
		}else{
			throw new Exception("You Need To Be Logged In, This Error Needs To Be Handled Better", 1);
		}
	}

	public function post_create()
	{
		$user_id = $this->account["id"];
		$product_name = Input::post("product_name");
		$product_number = Input::post("product_number");
		$quantity = Input::post("quantity");

		$new_product = Model_Product::add_product($product_name, $user_id, $product_number, $quantity);
	}
}