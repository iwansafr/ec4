<?php
namespace App\Controllers;

use \App\Config\Esg;
class User extends BaseController
{
	public function index()
	{
		return view('page/home');
	}
	public function role()
	{
		$this->esg->add_breadcumb(['User Role'=>'/user/role']);
		return view('user/role',
			[
				'extra_css'=>'config/config_css',
				'config' => 
				[
					'css' => 'data_table',
					'js' => 'data_table'
				],
			]
		);
	}
}