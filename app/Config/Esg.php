<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;

class Esg extends BaseConfig
{
	public $name = 'esg';
	public function __construct()
	{
		$configModel = new \App\Models\Config();
		$this->appearance = $configModel->get_config('appearance');
	}
}
