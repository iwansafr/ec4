<?php

namespace App\Models;

use CodeIgniter\Model;

class Esg extends Model
{
	public $config_template = [];
	public function __construct()
	{
		if(!empty($_POST))
		{
			$this->config_template['body-small-text'] = $_POST['body-small-text'];
			if(!empty($this->config_template['body-small-text']))
			{
				$this->config_template['body-small-text'] = 'text-sm';
			}
		}else{
			$this->config_template['body-small-text'] = '';
		}
	}
}