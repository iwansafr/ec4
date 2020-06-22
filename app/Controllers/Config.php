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
		// $this->cachePage(300);
		$parser = \Config\Services::parser();
		return view('config/index',
			[
				'extra_css'=>'config/config_css',
				'extra_js'=>'config/config_js','data',
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
		redirect()->back()->with('status',$status['status']);
		return redirect()->back()->with('msg',$status['msg']);
	}
}