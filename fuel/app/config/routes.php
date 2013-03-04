<?php
return array(
	'_root_'  => 'home/index',  // The default route
	'_404_'   => 'home/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),

	'user_landing' => 'account/user_landing',
	'register' => 'account/register',
	'login' => 'account/login',
	'logout' => 'account/logout',
	'manifest' => 'products/distributor_list'
);