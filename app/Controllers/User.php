<?php
namespace App\Controllers;

use \App\Config\Esg;
use \App\Models\User AS UserModel;
class User extends BaseController
{
	private $UserModel;
	public function __construct()
	{
		$this->UserModel = new UserModel();
	}
	public function index()
	{
		return view('pages/home');
	}
	public function role()
	{
		$this->esg->add_breadcumb(['User Role'=>'/user/role']);
		$this->UserModel->setTable('user_role');
		return view('user/role',
			[
				'extra_css'=>'config/config_css',
				'extra_js'=>'user/user_role_js',
				'config' => 
				[
					'css' => 'data_table',
					'js' => 'data_table'
				],
				'data' => $this->UserModel->findAll()
			]
		);
	}
	public function role_edit_save($id)
	{
		$validation = \Config\Services::validation();
		if($validation->run($this->request->getPost(),'user_role') == FALSE)
		{
			dd('sukses');
			if(empty($id))
			{
				$status = $this->UserModel->role_edit_save($this->request->getPost());
			}else{
				$status = $this->UserModel->role_edit_save($this->request->getPost(),$id);
			}
			redirect()->back()->with('status',$status['status']);
			return redirect()->back()->with('msg',$status['msg']);
		}else{
			dd('gagal');
			$status = ['status'=>'danger','msg'=>$validation->getErrors()];
			redirect()->back()->with('status',$status['status']);
			return redirect()->back()->with('msg',$status['msg']);
		}
	}

	public function role_delete($id)
	{
		$status = $this->UserModel->setTable('user_role')->delete($id);
		if($status)
		{
			redirect()->back()->with('status','success');
			return redirect()->back()->with('msg','Data Deleted Successfully');	
		}
	}
	public function role_multi_delete()
	{
		$status = $this->UserModel->setTable('user_role')->delete($this->request->getPost('del_row'));
		if($status)
		{
			redirect()->back()->with('status','success');
			return redirect()->back()->with('msg','Data Deleted Successfully');	
		}
	}
	public function role_detail($id)
	{
		$data = $this->UserModel->setTable('user_role')->find($id);
		return json_encode($data);
	}
}