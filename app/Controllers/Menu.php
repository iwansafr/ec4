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
				'extra_css'=>'menu/css',
				'extra_js'=>'menu/js',
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

	public function menu_save($id = 0)
	{
		$validation = \Config\Services::validation();
		if($validation->run($this->request->getPost(),'menu') == TRUE)
		{
			if(empty($id))
			{
				$status = $this->MenuModel->menu_save($this->request->getPost());
			}else{
				$status = $this->MenuModel->menu_save($this->request->getPost(),$id);
			}
		}else{
			$status = ['status'=>'danger','msg'=>$validation->getErrors()['name']];
		}
		return redirect_with('menu_edit',$status['status'],$status['msg']);
	}

	public function menu_delete($id = 0)
	{
		$status = $this->MenuModel->delete($id);
		if($status)
		{
			return redirect_with('menu_list');
		}
	}

	public function menu_multi_delete()
	{
		$status = $this->MenuModel->delete($this->request->getPost('del_row'));
		if($status)
		{
			return redirect_with('menu_list');
		}
	}

	public function detail($id)
	{
		$data = $this->MenuModel->find($id);
		return json_encode($data);

	}
}
