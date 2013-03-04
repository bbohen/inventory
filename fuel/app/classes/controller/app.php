<?php

class Controller_APP extends Controller_Base
{
	public function before()
	{
		parent::before();

		$this->_init_assets();
		$this->_init_nav();
		$this->_init_footer();
	}

	private function _init_nav()
	{
		$this->template->nav = View::forge("nav/nav");
	}

	private function _init_footer()
	{
		$this->template->footer = View::forge("footer/footer");
	}

	private function _init_template_vars()
	{

	}

	private function _init_assets()
	{
		
	}
}