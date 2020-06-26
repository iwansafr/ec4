<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu extends Model
{
	
	protected $table = 'menu';
	protected $allowedFields = ['id','name','param'];
	protected $title = 'menu';
	protected $useTimestamps = true;
	protected $date = true;

	// public function __construct()
	// {
	// 	$this->setDate(true);
	// }

	public function role_edit_save($post,$id = 0)
	{
		$this->table = 'menu';
		$this->title = 'Menu';
		
		$db = $this->db->table($this->table);
		// $db->select('id');
		// if(!empty($id))
		// {
		// 	$db->where('title',$post['title']);	
		// 	$db->notWhere('id',$id);	
		// }else{
		// 	$db->where('title',$post['title']);
		// }
		// $exist = $db->get()->getRow();
		// $status = 0;

		// if(!empty($exist->id))
		// {
		// 	return ['status'=>'danger','msg'=>$post['title'].' already exist'];
		// }
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