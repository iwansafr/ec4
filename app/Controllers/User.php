<?php
namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		return view('page/home');
	}
	public function role()
	{
		return view('user/role',
			[
				'extra_css'=>'config/config_css',
				'config' => 
				[
					'css' => 'data_table',
					'js' => 'data_table'
				]
			]
		);
	}
}