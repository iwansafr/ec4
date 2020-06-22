<?php
namespace App\Controllers;

use App\Models\Content AS ContentModel;

class Content extends BaseController
{

	protected $content;
	public function __construct()
	{
		$this->content = new ContentModel();
	}

	public function index()
	{
		$data =
		[
			'module' => 'Content',
			'task' => 'index',
			'config' => 
			[
				'css' => 'data_table',
				'js' => 'data_table'
			]
		];
		$data['data'] = $this->esg->config_template;
		$data['content'] = $this->content->findAll();
		return view('content/list',$data);
	}
}