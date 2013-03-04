<?php

class Controller_APP extends Controller_Base
{
	public function before()
	{
		parent::before();

		$this->_init_account();
		if (! Input::is_ajax())
		{
			$this->_init_nav();
			$this->_init_assets();
			$this->_init_template_vars();
			$this->_init_footer();
		}
	}

	private function _init_account()
	{
		if (Sentry::check())
		{
			$user = Sentry::user();
			$this->account = Model_Account::get_user($user->id);
		}
		else
		{
			$this->account = null;
		}
	}

	private function _init_template_vars()
	{
		$this->template->set_global('account', $this->account, false);
	}

	public function logged_in()
	{
		return (isset($this->account->id));
	}

	public function redirect_to_login($message = null)
	{
		if (! $this->logged_in())
		{
			$msg = ! empty($message) ? $message : 'You must be logged in to view that';
			$this->redirect('login', 'error', $msg);
		}
	}

	private function _init_nav()
	{
		$this->template->nav = View::forge("nav/nav");
	}

	private function _init_footer()
	{
		$this->template->footer = View::forge("footer/footer");
	}

	private function _init_assets()
	{
		
	}
}