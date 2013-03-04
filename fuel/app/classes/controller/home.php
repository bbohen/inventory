<?php

class Controller_Home extends Controller_App
{
	public function action_index()
	{
		$this->template->title = 'Inventory Demo';

		$this->template->content = View::forge('home/index', array(
			'products' => Model_Product::get_products()
		));

		//$this->template->content = View::forge('home/index');
	}

	public function action_hello()
	{
		return Response::forge(ViewModel::forge('welcome/hello'));
	}

	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
