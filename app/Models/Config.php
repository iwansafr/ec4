<?php

namespace App\Models;

use CodeIgniter\Model;

class Config extends Model
{
	protected $table = 'config';
	protected $allowedFields = ['id','name','param'];
	
	public function save_config($post)
	{
		$db = $this->db->table($this->table);
		$db->select('id');
		$db->where('name',$post['config_name']);
		$exist = $db->get()->getRow();
		$status = 0;
		if(!empty($exist->id))
		{
			$update = $this->db->table($this->table);
			$update->set('param',json_encode($post));
			$update->where('name',$post['config_name']);
			$update->update();
			$status = 1;
		}else{
			$insert = $this->db->table($this->table);
			$status = $insert->insert(['name'=>$post['config_name'],'param'=>json_encode($post)]);
			$status = $this->db->affectedRows();
		}
		if($status)
		{
			return ['status'=>'success','msg'=>'Configuration Saved Successfully'];
		}else{
			return ['status'=>'danger','msg'=>'Configuration Failed to Save'];
		}
	}
	public function get_config($name)
	{
		$db = $this->db->table($this->table);
		$db->select('param');
		$db->where('name',$name);
		$config = $db->get()->getRow();
		if(!empty($config))
		{
			return json_decode($config->param,true);
		}
	}
}