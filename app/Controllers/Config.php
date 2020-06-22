<?php
namespace App\Controllers;

use \App\Models\Config AS ConfigModel;
use CodeIgniter\API\ResponseTrait;
use \App\Helpers\esg_helper;

class Config extends BaseController
{
	use ResponseTrait;
	private $config;
	public function __construct()
	{
		$this->config = new ConfigModel();
	}
	public function index()
	{
		return view('config/index',
			[
				'extra_css'=>'config/config_css',
				'extra_js'=>'config/config_js','data',
				'data'=>
				[
					'appearance'=>$this->config->get_config('appearance'),
				]
			]
		);
	}
	public function appearance()
	{
		return view('config/appearance');
	}

	public function save()
	{
		$status = $this->config->save_config($this->request->getPost());
		if($status)
		{
			redirect()->back()->with('status',$status['status']);
			return redirect()->back()->with('msg',$status['msg']);
		}else{
			redirect()->back()->with('status',$status['status']);
			return redirect()->back()->with('msg',$status['msg']);
		}
	}
}