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
		// $parser = \Config\Services::parser();
		$this->esg->add_breadcumb(['Config'=>'/config']);
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
		return redirect()->back()->with('status',[
			'config' => [
				'status' => $status['status'],
				'msg' => $status['msg']
			]
		]);
	}
}