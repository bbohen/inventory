<?php

class Model_Account extends \Orm\Model
{
	protected static $_table_name = 'users';

	protected static $_properties = array(
		'id',
		'username',
		'first_name',
		'email',
		'account_type',
		'password',
		'password_reset_hash',
		'temp_password',
		'remember_me',
		'activation_hash',
		'last_login',
		'ip_address',
		'updated_at',
		'created_at',
		'status',
		'activated',
		'permissions',
	);

	public static function register($data)
	{
		// creates the user - no activation required
		$user_id = Sentry::user()->create(array(
			'email'    => $data->username,
			'password' => $data->password,
			//'username' => $data->username,
			'first_name' => $data->fname,
			
		));
	}

	public static function get_user($id)
	{
		return static::find($id);
	}
}