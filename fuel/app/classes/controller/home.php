<?php

class Controller_Home extends Controller_App
{
	public function action_index()
	{
		$this->template->title = 'Brad Bohen';
		// $this->template->content = View::forge('home/index', array(
		// 	'projects' => Model_Project::get_projects()
		// ));
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
