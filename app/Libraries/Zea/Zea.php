<?php

namespace App\Libraries;

use CodeIgniter\Model;
class Zea extends Model
{
	private $input = [];
	public function __construct()
	{

	}

	public function addInput($title = '', $type = '')
	{
		$this->input[] = [
			'title' => $title,
			'type' => $type
		];
	}

	public function form()
	{
		$form = '';
		if(!empty($this->input))
		{
			$form .= '<form action="" method="post" enctype="multipart/form-data">';
			foreach ($this->input as $key => $value) 
			{
				$form .= '<div class="form-group">';
				$form .= '<label>'.$value['title'].'</label>';
				switch ($value['type']) {
					case 'text':
					case 'number':
					case 'date':
					case 'color':
					case 'file':
						$form .= '<input type="'.$value['type'].'" class="form-control">';
						break;
					default:

						break;
				}
				$form .= '</div>';
			}
			$form .= '</form>';
		}
		return $form;
	}
}