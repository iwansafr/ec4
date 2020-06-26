<?php
namespace App\Controllers;
use \App\Models\Menu AS MenuModel;
class Menu extends BaseController
{
	private $MenuModel;
	public function __construct()
	{
		$this->MenuModel = new MenuModel();
	}

	public function index()
	{
		$this->esg->add_breadcumb(['Menu'=>'/menu']);
		$this->MenuModel->setTable('menu');
		return view('menu/index',
			[
				'extra_css'=>'config/config_css',
				'extra_js'=>'user/user_role_js',
				'config' => 
				[
					'css' => 'data_table',
					'js' => 'data_table'
				],
				'data' => $this->MenuModel->findAll()
			]
		);
	}

	public function manage($name)
	{
		// $data = $this->
		return view('menu/index',[
			'extra_css'=>'menu/css',
			'extra_js'=>'menu/js'
		]);
	}

}
