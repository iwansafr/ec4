<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;

class Esg extends BaseConfig
{
	public $name = 'esg';
	public $breadcumb = [];
	public function __construct()
	{
		$configModel = new \App\Models\Config();
		$this->appearance = $configModel->get_config('appearance');
		$this->breadcumb[] = ['Home'=> '/'];
	}
	public function add_breadcumb($breadcumb = array())
	{
		if(!empty($breadcumb))
		{
			foreach ($breadcumb as $key => $value)
			{
				$this->breadcumb[] = [$key => $value];
			}
		}
	}
}
