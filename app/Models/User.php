<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	
	protected $table = 'user';
	protected $allowedFields = ['id','user_role_id','username','password','image','status'];
	protected $title = 'user';
	protected $useTimestamps = true;
	protected $date = true;

	public function role_edit_save($post,$id = 0)
	{
		$this->table = 'user_role';
		$this->title = 'User Role';
		
		$db = $this->db->table($this->table);
		if(!empty($id))
		{
			$update = $this->db->table($this->table);
			$update->set($post);
			$update->where('id',$id);
			$update->update();
			$status = 1;
		}else{
			$insert = $this->db->table($this->table);
			$status = $insert->insert($post);
			$status = $this->db->affectedRows();
		}

		if($status)
		{
			return ['status'=>'success','msg'=>$this->title.' Saved Successfully'];
		}else{
			return ['status'=>'danger','msg'=>$this->title.' Failed to Save'];
		}
	}
}