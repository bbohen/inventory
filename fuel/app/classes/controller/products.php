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
}