<?php

class Controller_Account extends Controller_App
{
	public function action_index()
	{
		Response::redirect(Uri::base());
	}

	public function action_user_landing()
	{
		$data = Session::get_flash();
		$message = isset($data['error']['value']) ? $data['error']['value'] : null;
		
		$this->template->title = 'Sign In / Sign Up';
		$this->template->content = View::forge('users/landing', array(
			'message' => $message
		));	
	}

	public function post_register()
	{
		$post = $this->post_data('username', 'password', 'fname');

		try
		{
			$account = Model_Account::register($post);
		}
		catch (Exception $e)
		{
			throw $e;
			
			//$this->redirect('register', 'error', $e->getMessage());
		}

		// Sentry::login($post->username->value, $post->password->value);
		//$this->redirect('feed', 'success', 'You are now registered');
	}
}