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

	public function post_login()
	{
		$post = $this->post_data('username','password');

		try
		{
			Sentry::login($post->username->val(), $post->password->val());
		}
		catch (SentryAuthException $e)
		{
			$this->redirect('login', 'error', $e->getMessage());
		}

		$this->redirect('manifest', 'success', 'Welcome Back');
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

		Sentry::login($post->username->value, $post->password->value);
		$this->redirect('manifest', 'success', 'You are now registered');
	}

	public function get_logout()
	{
		Sentry::logout();
		$this->redirect('/', 'success', 'You are now logged out. Come back soon!');
	}
}