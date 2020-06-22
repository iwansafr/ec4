<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;

class Esg extends BaseConfig
{
	public $name = 'esg';
	public function __construct()
	{
		$esgmodel = new \App\Models\Esg();
		$this->name = $esgmodel->name;
	}
}
